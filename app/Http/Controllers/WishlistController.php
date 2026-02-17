<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }
        // Gets wishlist, creates one for the user if none already exists
        $wishlist = Wishlist::where('user_id',Auth::id())->firstOrCreate();
        return view('WishList',[
            'items'=>$wishlist->items
        ]);
    }

    public function add(Request $request)
    {
        // TODO: add function to add an item to the wish list
    }

    public function remove(Request $request)
    {
        // TODO: add function to remove an item from the wish list
    }

    public function totalItems()
    {
        // TODO: add total items in wish list function
    }
}
