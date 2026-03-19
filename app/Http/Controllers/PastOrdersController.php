<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PastOrdersController extends Controller
{
    public function index()
    {
        return view('user.pastorders')->with(['orders'=>Auth::user()->orders]);
    }

    public function orderDetails(Request $request)
    {
            $order = Order::find($request->order_id);
            if($order->belongsTo(Auth::user()->orders))
            {
                return view('user.orderdetail')->with(['order'=>$order]);
            }
    }
}
