<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            return view('reviews.addreview');

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
        // TODO: add function to remove review
    }
}
