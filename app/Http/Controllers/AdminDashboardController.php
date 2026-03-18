<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\AdminLog;
use Illuminate\Http\Request;
use App\Models\User;


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

        //number of the amount of orders that are currently pending
        $processingOrdersCount = Order::query()
        ->where('status','Pending')
        ->count();

        //number of the amount of products that are currently out of stock
        $outOfStockCount = Product::query()
        ->where('stock_level',0)
        ->count();

        //number of the amount of orders in progress
        $orderInProgressCount = Order::where('status','Processing')->count();
    
        //gets the newest admin logs
        $recentActivities = AdminLog::latest()
        ->take($activityLimit)
        ->get();

        //returning the view for the admin dashboard
        return view('admin.dashboard',[
        'lowStockBound' => $lowStockBound,
        'lowStockCount' => $lowStockCount,
        'processingOrdersCount' => $processingOrdersCount,
        'outOfStockCount' => $outOfStockCount,
        'orderInProgressCount' => $orderInProgressCount,
        'recentActivities' => $recentActivities,
        'users' => $users
        ]);
    }
}
