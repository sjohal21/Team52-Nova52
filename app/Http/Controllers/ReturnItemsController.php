<?php

namespace App\Http\Controllers;

use App\Models\Orderitems;
use Illuminate\Http\Request;

class ReturnItemsController extends Controller
{
    public function index(Request $request)
    {
        $validatedRequest = $request->validate(['orderItemID' => 'required|exists:Orderitems,id']);
        $item = Orderitems::where($validatedRequest['orderItemID'], 'id')->first();
        return view('user.returnitem')->with(['item' => $item]);
    }
    public function returnItem(Request $request)
    {
        $validatedRequest = $request->validate(['orderItemID' => 'required|exists:Orderitems,id']);
        $item = Orderitems::where($validatedRequest['orderItemID'], 'id')->first();
        $order = $item->order;
        $order->remove($item);
        $newOrderTotal = $order->total - $item->price;
        $order->total = $newOrderTotal;
        $order->save();
        return redirect()->view('user.returnitem')->with(['order' => $order]);
    }
}
