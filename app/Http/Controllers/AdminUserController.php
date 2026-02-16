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

        if (user->role !== 'Admin') {
            user->role == 'Admin';
            user->save;
        }
        return redirect('/admin/users')->with('success','User has been successfully promoted!');
    }
}
