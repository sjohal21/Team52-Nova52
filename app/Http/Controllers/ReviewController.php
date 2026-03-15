<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index(int $productID)
    {
        if(Auth::check())
        {
            return view('reviews.addreview')->with('productToReview', Product::where('id',$productID)->first());

        }
        else
        {
            return redirect('/login');
        }
    }

    public function addReview(Request $request, int $productID)
    {
        $validatedData = $request->validate(["description" => "required"]);
        if ($validatedData)
        {
            $userID = Auth::id();
            Reviews::create([
                'user_id' => $userID,
                'product_id' => $productID,
                'description' => $request->description
            ]);
            return redirect('/products/' . $productID)->with('success', 'Review added successfully');
        }
    }

    public function removeReview(Request $request)
    {
        $validatedData = $request->validate(["review_id" => "required"]);
        if ($validatedData)
        {
            Reviews::destroy($validatedData['review_id']);
            return redirect('/user/reviews')->with('success', 'Review removed successfully');
        }
    }

    public function getEditor(int $reviewID)
    {
        return view('reviews.editreview')->with(['reviewID' => $reviewID, 'currentReview' => Reviews::where('id', $reviewID)->first()->description, 'productToReview' => Reviews::where('id', $reviewID)->first()->product]);
    }
    public function editReview(Request $request, int $reviewID)
    {
        $validatedData = $request->validate(["description" => "required"]);
        if ($validatedData)
        {
            $review = Reviews::where('id',$reviewID)->first();
            $review->description = $request->description;
            $review->save();
            return redirect('/user/reviews')->with('success', 'Review edited successfully');
        }
    }

    public function viewPast()
    {
        return view('reviews.allreviews')->with(['reviews' => Auth::user()->reviews]);
    }
}
