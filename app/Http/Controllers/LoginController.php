<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     
     //check if the user is authenticated
     $user = Auth::user();

     //checks if the current users role is admin
     if($user->role === 'admin') {
     //if they are an admin redirect them to the administator dashboard
     return redirect()->with('success','Welcome to Nova52 Administrator');
     }else {
      //if theyre not an admin (a customer) redirects them to the normal customer homepage
     return redirect('/home')->with('success','Welcome to Nova52');
     }
    //Returns anyone without logged credentials bag to the login page but keeps email entered
     return back()
     ->withErrors(['email','Login Unsuccessful!, the provided details do not match our records'])
     ->onlyInput('email');
      }

    }

    public function logout(Request $request) {

    //removes users authentication for the session
      Auth::logout();

      //removes the session data so it cant be reused
      $request->session()->invalidate();

      //generates new CSRF token so old cant be reused
      $request->session()->regenerateToken();
      //returns the user to the hompage
      return redirect('/home')->with('success','Successfully Logged Out');
    }
}
