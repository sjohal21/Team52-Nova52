<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PastOrdersController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            return view('user.pastorders')->with(['orders'=>Auth::user()->orders]);
        }
        else
        {
            return view('auth.login');
        }
    }
}
