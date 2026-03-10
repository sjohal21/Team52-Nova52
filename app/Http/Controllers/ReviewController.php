<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        return view('reviews.allreviews',['reviews'=>Reviews::where('user_id',Auth::id())->get()]);
    }

    public function addReview(Request $request)
    {
        $validatedData = $request->validate(["product_id" => "required", "description" => "required"]);
        if ($validatedData)
        {
            $userID = Auth::id();
            Reviews::create([
                'user_id' => $userID,
                'product_id' => $request->product_id,
                'description' => $request->description
            ]);
            return redirect('/products/' . $request->product_id)->with('success', 'Review added successfully');
        }
    }

    public function removeReview(Request $request)
    {
        // TODO: add function to remove review
    }
}
