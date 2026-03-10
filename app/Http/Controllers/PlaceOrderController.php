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

    public function placeOrder(Request $request) {
        // Get all items in order
        $basket = Basket::where(['user_id' => Auth::id(), 'id' => session('basket_id')])->get();

        // Create the total for the order
        $user_id = Auth::id();

        // Validate the request
        $validatedRequest = $request->validate([
            'First_Name' => 'required',
            'Surname' => 'required',
            'Address_Line_1' => 'required',
            'City' => 'required',
            'Postcode' => 'required',
            'Select_Country' => 'required',
        ]);

        // Store product data into order table

        // Clear the cart
    }

}

