<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     public function show() {
        return view('auth.login');
    }

    public function login(Request $request) {

      //Validate incoming form data
      $credentials = $request->validate([
    'email' => 'required|email',
    'password' => 'required',
      ]);

      //Attempt to log in
      if(Auth::attempt($credentials,$request->boolean('remember'))) {

        //gives user a new session ID to prevent hackers using an old one to access their account
     $request->session()->regenerate();

     $user = Auth::user();
     if($user->role === 'admin') {
     return redirect()->with('success','Welcome to Nova52 Administrator');
     }
     else {
     return redirect('/')->with('success','Welcome to Nova52');
     }

      }
      return back()
      ->withErrors(['email','Login Unsuccessful!, the provided details do not match our records'])
      ->onlyInput('email');

    }

    public function logout(Request $request) {

    //removes users authentication for the session
      Auth::logout();

      //removes the session data so it cant be reused
      $request->session()->invalidate();

      //generates new CSRF token so old cant be reused
      $request->session()->regenerateToken();

      return redirect('/')->with('success','Successfully Logged Out');
    }
}
