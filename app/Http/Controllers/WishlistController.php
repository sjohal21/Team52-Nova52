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
        $wishlist = Wishlist::where('user_id',Auth::id())->first();
        return view('WishList',[
            'items'=>$wishlist->items
        ]);
    }
    public function totalItems()
    {
        // TODO: add total items in wish list function
    }
}
