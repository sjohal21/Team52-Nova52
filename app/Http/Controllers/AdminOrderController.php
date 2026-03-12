<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderitems;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index(Request $request)
    {

        //Validates the chosen status filter
        $request->validate([
            'status' => 'nullable|in:all,Pending,Processing,Shipped,Delivered,Cancelled/Returned'
        ]);


        $orderQuery = Order::with('user');

        //get chosen status from website, if they haven't chosen one keep 'all' as default
        $status = $request->query('status', 'all');

        //apply chosen filter if it's not all, if all is chosen don't filter anything
        if ($status != 'all') {
            $orderQuery->where('status', $status);
        }

        //Sort the newest results first and paginate the results to 10 per page
        //keep the status filter when on the next page
        $orders = $orderQuery
            ->latest()
            ->paginate(10)
            ->withQueryString();

        //return the view to the admin page
        return view('admin.order.index')->with([
            'orders' => $orders,
            'chosenStatus' => 'status'
        ]);
    }

       public function show(Order $order)
        {

            //loads the customer that placed the order
            $order->load('user');

            //get all the items and products for the order
            $items = Orderitems::query()
                ->where('order_id', $order->id)
                ->with('product')
                ->get();

            $total = $items->sum('amount');

            return view('admin.order.show', [
                'order' => $order,
                'items' => $items,
                'total' => $total
            ]);
        }

    public function updateStatus(Request $request, Order $order) {

    //validate the status values
        $request->validate([
            'status' => 'nullable|in:Pending,Processing,Shipped,Delivered,Cancelled/Returned'
        ]);

    //Update the status of the order and save the change into the database
        $order->status = $request->status;
        $order->save;

        return back()->with('success','Order status updated');
    }
}
