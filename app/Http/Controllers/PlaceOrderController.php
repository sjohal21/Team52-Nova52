<?php

use Illuminate\Support\Facades\Sessions;


class PlaceOrderController extends Controller {
    public function index() {
        return view('home');
    }

    public function placeOrder () {
        // Display all items in order
        

        // Create the total for the order
        $user_id= Session::get('user_id');
        return $baskets = DB::table('products')
        ->join('baskets','products.product_id','=','baskets,product_id')
        ->where('basket.user_id', $user_id)
        ->sum('products.price');

        // Display 
    }
}

