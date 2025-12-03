<?php

use Illuminate\Support\Facades\Sessions;


class PlaceOrderController extends Controller {

    public function fetchInfo() {
        // Fetch products from basket

        // Calculate total for basket

        // Set address for user
        // If no address, prompt to add to profile

        // 
    }

    public function confirmOrder () {
        // Display all items in order
        $sql_query = "SELECT * FROM baskets";


        // Create the total for the order
        $user_id= Session::get('user_id');
        $basket_Total = $baskets = DB::table('products')
        ->join('baskets','products.product_id','=','baskets,product_id')
        ->where('basket.user_id', $user_id)
        ->sum('products.price');

        // Display 
    }

    public function storeOrder() {
        // Validate it's a real address

        // Store product data into order table

        // Clear the cart
    }

    
}

