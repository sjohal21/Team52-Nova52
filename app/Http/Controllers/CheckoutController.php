<?php

namespace App\Http\Controllers;

 //  *********** Import Required Classes ***********
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Orderitems;
use App\Models\User;
use App\Models\Basket; // Pre- Merge

class CheckoutController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $basket = $user->basket; 
        $baskettotal = $basket->total();
        // Basket Vat
        // Basket delivery fee only when over 50
        // Calculated total
        
        return view('checkout' , compact('baskettotal')); 
    }

    public function checkout(Request $request){

        //  *********** Validation ***********
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
        
        //  *********** Get basket items/total ***********
        
         $user = auth()->user();
         $basket = $user->basket;
         $basketItems = $basket->items;
    
         $total = $basketItems->sum(function($item){ // temp as basket model logic should have total
            return $item->product->price * $item->quantity;
         });

        //  *********** Create Order ***********
            $order = new \App\Models\Order(); //Initialize order Model/Object
            $order->user_id = $user->id;
            $order->First_Name = $request->input('First_Name');
            $order->Surname = $request->input('Surname');
            $order->Email_Address = $request->input('Email_Address');
            $order->Phone_Number = $request->input('Phone_Number');
            $order->Address_Line_1 = $request->input('Address_Line_1');
            $order->Address_Line_2 = $request->input('Address_Line_2');
            $order->City = $request->input('City');
            $order->Postcode = $request->input('Postcode');
            $order->Select_Country = $request->input('Select_Country');
            $order->total_price = $total;
            $order->save(); // Save to database
    
            // Create order items from basket items (Copies)
            foreach($basketItems as $basketItem){
                $orderItem = new \App\Models\Orderitems(); //Initialize orderItems Model/Object
                $orderItem->order_id = $order->id;
                $orderItem->product_id = $basketItem->product_id;
                $orderItem->amount = $basketItem->quantity;
                $orderItem->price = $basketItem->product->price;
                $orderItem->save(); // Save to database
            }
    
            //  *********** After Successful Order ***********
            $basket->items()->delete(); 
            
            //  Redirects to a new page
            return redirect()->route('order.success' , $order->id)->with('success', 'Order placed successfully!');
    }

     //  *********** Confirmation page ***********
     public function OrderConfirmation(Order $order)
            {
                return view('order_confirmation'); // add , comapct('order') when full backen is integrated
            }

}