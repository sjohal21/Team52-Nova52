<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {

        $request->validate([
         'name' => 'required|string|max:255',
         'email' => 'required|email|unique:users'
         'password' =>
    

        ]);
    }
}
