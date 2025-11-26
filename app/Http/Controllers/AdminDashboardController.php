<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


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

        if ($user && $user->role !== 'admin') {
            $user->role = 'admin';
            $user->save(); //writes the change into the database
        }
        return redirect('/admin/users')->with('success', 'User has been successfully promoted!');
    }

    public function demoteUser(Request $request) {
        //gets the user id
        $user = User::find($request->user_id);

        if ($user && $user->role === 'admin') {
            $user->role = 'customer';
            $user->save(); //writes the change into the database
        }
        return redirect('/admin/users')->with('success', 'User has been successfully demoted!');
    }
}
