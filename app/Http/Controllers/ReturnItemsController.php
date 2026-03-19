<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderitems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReturnItemsController extends Controller
{
    public function index(int $orderItemsID)
    {
        $item = Orderitems::where('id',$orderItemsID)->first();
        $order = Orderitems::where('id',$orderItemsID)->first()->order;
        if($order->user_id == Auth::id())
        {
            return view('user.returnitem')->with(['item' => $item]);
        }
        else
        {
            return redirect('/');
        }
    }
    public function returnItem(int $orderItemsID)
    {
        $order = Orderitems::where('id',$orderItemsID)->first()->order;
        // Check if the item being returned actually belongs to the current user
        if($order->user_id == Auth::id())
        {
            $item = $order->Orderitems->where('id',$orderItemsID)->first();
            $order = $item->order;
            $newOrderTotal = $order->total_price - $item->price;
            $order->total_price = $newOrderTotal;
            $item->delete();
            $order->save();
            if(count($order->Orderitems) < 1)
            {
                $order->delete();
            }
            return redirect('/user/returnSuccess');
        }
        else
        {
            return redirect('/');
        }
    }
    public function returnSuccess()
    {
        return view('user.returnsuccess');
    }
}
