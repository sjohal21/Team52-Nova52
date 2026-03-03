<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageDetailsController extends Controller
{
    public function index()
    {
        // TODO: show page to change user details
        return view('user.managedetails');
    }

    public function changeEmail(Request $request)
    {
        // TODO: add function to change the user's email
        $validatedEmail = $request->validate(['email' => 'required|email']);
        if($validatedEmail['email'] != null)
        {
            $user = Auth::user();
            $user->email = $validatedEmail['email'];
        }
    }

    public function changePassword(Request $request)
    {
        // TODO: add function to change the user's password
    }
}
