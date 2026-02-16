<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }
        $wishlist = Wishlist::with('user_id')->find(Auth::id());
        return view('wishlist',[
            'items'=>$wishlist->items
        ]);
    }
    public function totalItems()
    {
        // TODO: add total items in wish list function
    }
}
