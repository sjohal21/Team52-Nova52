<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;


class AdminDashboardController extends Controller
{

  public function show() {

        //value that we will use to decide whether an item is low on stock
        $lowStockBound = 6;
        //amount of entries for the recent activity
        $activityLimit = 6;

        //number of the amount of products that are currently low on stock
        $lowStockCount = Order::query()
        ->WhereNotNull('stock_level')
        ->WhereBetween('stock_level',[1,$lowStockBound])
        ->count();

        //number of the amount of orders that are currently processing
        $processingOrdersCount = Order::query()
        ->where('status','pending')
        ->count();

        //number of the amount of products that are currently out of stock
        $outOfStockCount = Order::query()
        ->where('stock_level',0)
        ->count();

        //number of the amount of orders in progress
        $orderInProgressCount = Order::query()
        ->where('status','!=','processing')
        ->count();

        //returning the view for the admin dashboard
        return view('admin.dashboard',[
        'lowStockBound' => $lowStockBound,
        'lowStockCount' => $lowStockCount,
        'processingOrdersCount' => $processingOrdersCount,
        'outOfStockCount' => $outOfStockCount,
        'orderInProgressCount' => $orderInProgressCount,
        ]);
    }
}
