<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderitems;
use App\Models\ReturnedItem;
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
    public function returnItem(int $orderItemsID, Request $request)
    {
        $order = Orderitems::where('id',$orderItemsID)->first()->order;
        // Check if the item being returned actually belongs to the current user
        if($order->user_id == Auth::id())
        {
            $item = $order->Orderitems->where('id',$orderItemsID)->first();
            $order = $item->order;
            // Take away item plus VAT
            $newOrderTotal = $order->total_price - $item->price - (($item->price)*0.2);
            $order->total_price = $newOrderTotal;
            ReturnedItem::create([
                'product_id'=>$item->product->id,
                'order_id'=>$order->id,
                'user_id'=>Auth::id(),
                'reason'=>$request->input('reasonReturn','Unknown'),
                'refund_amount'=>($item->price + ($item->price*0.2)),
                ]);
            $item->product->stock_level += 1;
            $item->delete();
            if(count($order->Orderitems) < 1)
            {
                $order->status = 'Cancelled/Returned';
                $order->items_price = 0;
                $order->vat = 0;
                $order->shipping = 0;
                $order->total_price = 0;
                $order->save();
            }
            else
            {
                $order->save();
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
