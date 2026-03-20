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

    public function orderDetails(int $orderID)
    {
            $order = Auth::user()->orders->where('id', $orderID)->first();
            $extraCost = $order->vat + $order->shipping;
            if($order)
            {
                return view('user.orderdetail')->with(['order'=>$order, 'extraCost'=>$extraCost]);
            }
    }
}
