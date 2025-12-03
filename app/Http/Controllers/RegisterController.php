<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show() {
        return view('auth.register');
    }

    public function register(Request $request) {

        //Validates incoming form data
        $request->validate([
         'name' => 'required|string|max:255',
         'email' => 'required|email|unique:users', //unique:users checks that the email isnt already in the database
         'password' => 'required|min:8|confirmed', //confirmed checks that theres a confirmation field and makes sure password matches
         'phone_number' =>'required|string|',
         'address' => 'nullable|string',  //nullable allows the value to be empty when registering
        ]);

        //Creates user and enters into database
        $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password), //Hashes the password so its safely stored
        'phone_number' => $request->password,
        'address' => $request->address,
        'role' => 'customer'  //sets the current user to a customer by default
        ]);

        //Logs in the new user automatically
        Auth::login($user);

        //redirects user to the home page
        return redirect('/')->with('success','Welcome to Nova52');
    }
}
