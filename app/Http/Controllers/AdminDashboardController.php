<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;


class AdminDashboardController extends Controller
{

    public function show() {
        $users = User::all();
        return view('admin.dashboard',['users' => $users]);
    }

    public function manageUsers() {

        $users = User::all();

        return view('admin.users',['users' => $users]);
    }

    public function promoteUser(Request $request) {
        //gets the user id
        $user = User::find($request->user_id);

        if ($user && $user->role !== 'Admin') {
            $user->role = 'Admin';
            $user->save(); //writes the change into the database
        }
        return redirect('/admin/users')->with('success', 'User has been successfully promoted!');
    }

    public function demoteUser(Request $request) {
        //gets the user id
        $user = User::find($request->user_id);

        if ($user && $user->role === 'Admin') {
            $user->role = 'customer';
            $user->save(); //writes the change into the database
        }
        return redirect('/admin/users')->with('success', 'User has been successfully demoted!');
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
