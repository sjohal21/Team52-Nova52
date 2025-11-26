<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    
    public function show() {
        return view('admin.dashboard');
    }

    public function manageUsers() {

        $users = app\Models\User:all();

        return view('admin.users',['users' => $users]);
    }
}
