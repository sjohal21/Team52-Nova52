<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        if (Auth::check())
        {
            return view('user.profile')->with(['user'=>Auth::user()]);
        }
        else
        {
            return view('auth.login');
        }
    }
}
