<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function show() {
        //Get all of the users from the users table and order them by name
        $users = User::query()
          ->orderBy('name')
          ->get();
        return view('admin.users',['users' => $users]);
    }

    public function promote(Request $request) {
        //makes sure that a valid user id exists for the user
        $request->validate([
          'user_id' => ['required','integer','exists:users,id']
        ]);

        //if the user doesnt exist an error is thrown
        $user = User::findOrFail($request->'user_id');
        
        //change customer to an admin
        if (user->role !== 'Admin') {
            user->role == 'Admin';
            user->save;
        }
        return redirect('/admin/users')->with('success','User has been successfully promoted!');
    }

    public function demote(Request $request) {
        $request->validate([
            ['user_id' => 'required,integer,exists:users,id'],
        ]);
        
        $user = User::findorFail($request->'user_id');

        //prevents current user from demoting themselves
        if($user->id === auth()->id()) {
            return bac()->withErrors(['user_id' => 'You cannot demote yourself']);
        }
        
        //change admin user to customer
        if (user->role == 'Admin') {
            user->role == 'customer';
            user->save();
        }
        return redirect('/admin/users')->with('success','User has been successfully demoted');
    }
}
