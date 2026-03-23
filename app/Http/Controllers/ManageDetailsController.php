<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ManageDetailsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('user.managedetails',['name'=>$user->name, 'email'=>$user->email, 'phone'=>$user->phone_number, 'changepassword'=>$user->must_change_password]);
    }

    public function changeEmail(Request $request)
    {
        $validatedEmail = $request->validate(['email' => 'required|email']);
        if($validatedEmail['email'] != null)
        {
            $user = Auth::user();
            $user->email = $validatedEmail['email'];
            $user->save();
            return redirect('/user/modify')->with('successEmail', 'Your email changed successfully.');
        }
    }

    public function changePassword(Request $request)
    {
        $validatedPassword = $request->validate(['password' => 'required|min:8', 'passwordConfirm'=>'required|same:password']);
        if($validatedPassword['password'] != null)
        {
            $user = Auth::user();
            $user->password = Hash::make($validatedPassword['password']);
            $user->must_change_password = false;
            $user->save();
            return redirect('/user/modify')->with('successPassword', 'Your password successfully changed');
        }
    }

    public function changePhone(Request $request)
    {
        $validatedPhone = $request->validate(['phone' => 'required|numeric']);
        if($validatedPhone['phone'] != null)
        {
            $user = Auth::user();
            $user->phone_number = $validatedPhone['phone'];
            $user->save();
            return redirect('/user/modify')->with('successPhone', 'Your phone number successfully changed');
        }
    }


}
