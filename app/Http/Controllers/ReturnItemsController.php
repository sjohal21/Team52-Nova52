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
        if(Auth::user()->orderItems->contains($item))
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
        $item = Orderitems::where('id',$orderItemsID)->where('user_id',Auth::id())->first();
        // Check if the item being returned actually belongs to the current user
        if($item)
        {
            $tempItem = $item;
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
