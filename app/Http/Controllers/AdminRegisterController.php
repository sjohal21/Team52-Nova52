<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRegisterController extends Controller
{
 public function show() {
 return view('admin.auth.register');
 }

 public function register(Request $request) {

  $data = $request->validate([
    'name' => 'required|string|max:255',
    'employee_id' => 'required|string|max:50|unique:users',
    'email' => 'required|email|unique:users',
    'password' => 'required|min:8|confirmed',
    'authorised' => 'accepted',
  ]);
 
  //make sure that any inputs dont have spaces and are all capital so its easier to compare correct password
    $employee_Id = strtoupper(trim($data['employee_id']));

  //check if there is a valid employee with the entered id
    $employee = Employee::where('employee_id',$employee_Id);

  //if user is not an employee then return an error message and clear the password fields
    if(!$employee) {
        return back()
        ->withErrors(['employee_id' => 'Unsuccessful, Employee ID not Recognised!'])
        ->withInput($request->except('password','password_confirmation'));
    }

    //creates the admin user in the database
    $admin = User::create([
    'name' => $data['name'],
    'employee_id' => $employee_Id,
    'email' => $data['email'],
    'password' => Hash::make($data['password']),
    'role' => 'admin',
    ]);

    //automatically logs in the new admin
    Auth::login($admin)
    //regenerates the session to prevent hackers from using old session
    $request->session()->regenerate();
    //redirect to admin dashboard
    return redirect('/admin/dashboard')->with('success','Welcome to Nova52 Administrator');
 } 
}
