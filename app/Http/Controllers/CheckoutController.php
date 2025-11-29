<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function checkout(Request $request){

        // Validates if the neccessary fields are filled out correctly
        $request->validate(
            [
                'First_Name' => 'required|string|max:255',
                'Surname' => 'required|string|max:255',
                'Email_Address' => 'required|email|max:255',
                'Phone_Number' => 'required|string|max:20',
                'Address_Line 1' => 'required|string|max:255',
                'City' => 'required|string|max:100',
                'Postcode' => 'required|string|max:20',
                'Select_Country' => 'required|string|max:100',
                'Card_Number' => 'required|numeric',
                'Expiry_Date' => 'required|string|max:5',
                'Card_Name' => 'required|string|max:255',
                'CVV' => 'required|numeric',
            ]
        );
        // Console Log Tests
        

    }
}