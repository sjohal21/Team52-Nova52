<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ManageDetailsController extends Controller
{
    public function index()
    {
        return view('user.managedetails');
    }

    public function changeEmail(Request $request)
    {
        $validatedEmail = $request->validate(['email' => 'required|email']);
        if($validatedEmail['email'] != null)
        {
            $user = Auth::user();
            $user->email = $validatedEmail['email'];
            $user->save();
            redirect('user.managedetails')->with('success', 'Your email changed successfully');
        }
    }

    public function changePassword(Request $request)
    {
        $validatedPassword = $request->validate(['password' => 'required|min:8']);
        if($validatedPassword['password'] != null)
        {
            $user = Auth::user();
            $user->password = Hash::make($validatedPassword['password']);
            $user->save();
            redirect('user.managedetails')->with('success', 'Your password successfully changed');
        }
    }
}
