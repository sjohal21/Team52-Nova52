<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Wishlist;
use App\Models\WishlistItem;
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
        // Takes in product ID and adds to wish list
        $validated = $request->validate(['product_id'=>['required','exists:products,id']]);
        if(Auth::id() != null)
        {
            $wishlist = Wishlist::where('user_id',Auth::id())->firstOrCreate();
        }
        else if($validated['product_id'] == null)
        {
            return redirect('home');
        }
        else
        {
            return redirect('login');
        }
        // Find if product is already in the wish list, return an error if so
        if($wishlist->items->contains($validated['product_id']))
        {
            return redirect('wishlist')->with("Product is already in your wishlist");
        }
        else
        {
            // Add the item to the wishlist
            WishlistItem::create(['product_id'=> $validated['product_id'], 'wishlist_id'=> $wishlist->id]);
            return redirect('wishlist')->with("Product added to wishlist");
        }
    }
    public function remove(Request $request)
    {
        $wishlist = Wishlist::where('user_id',Auth::id())->first();
        $validated = $request->validate(['product_id'=>['required','exists:products,id']]);
        if(Auth::id() != null && $validated['product_id'] != null)
        {
            $item = WishlistItem::where('product_id',$validated['product_id'])->where('wishlist_id',$wishlist->id)->first();
            $item->delete();
            return redirect('wishlist')->with("Product removed from wishlist");
        }
        else
        {
            return redirect('wishlist')->with("Error: product not removed from wishlist");
        }

    }

    public function clear()
    {
        // TODO: add function to clear the wishlist
        $wishlist = Wishlist::where('user_id',Auth::id())->first();
        $wishlist->delete();
        Wishlist::create('user_id',Auth::id());
        return redirect('wishlist')->with("Wishlist cleared");
    }

    public function totalItems()
    {
        // TODO: add total items in wish list function
    }
}
