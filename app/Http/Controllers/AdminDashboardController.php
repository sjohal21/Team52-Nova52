<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;


class AdminDashboardController extends Controller
{

  public function show() {

        $users = User::all();
      //value that we will use to decide whether an item is low on stock
        $lowStockBound = 6;
        //amount of entries for the recent activity
        $activityLimit = 6;

        //number of the amount of products that are currently low on stock
        $lowStockCount = Product::WhereBetween('stock_level',[1,$lowStockBound])->count();

        //number of the amount of orders that are currently processing
        $processingOrdersCount = Order::query()
        ->where('status','Pending')
        ->count();

        //number of the amount of products that are currently out of stock
        $outOfStockCount = Product::query()
        ->where('stock_level',0)
        ->count();

        //number of the amount of orders in progress
        $orderInProgressCount = Order::where('status','Processing')->count();

        //returning the view for the admin dashboard
        return view('admin.dashboard',[
        'lowStockBound' => $lowStockBound,
        'lowStockCount' => $lowStockCount,
        'processingOrdersCount' => $processingOrdersCount,
        'outOfStockCount' => $outOfStockCount,
        'orderInProgressCount' => $orderInProgressCount,
            'users' => $users
        ]);
    }
    public function updateStock(Request $request, $id)
{
    $request->validate([
        'stock_level' => 'required|integer|min:0'
    ]);

    $product = Product::find($id);
    
    if ($product) {
        $product->stock_level = $request->stock_level;
        $product->save();
    }
    
    return redirect()->back();
}
}
