<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Validation\Rules\Email;

class ContactController extends Controller
{
    public function index()
    {
        return view('Contact');
    }
    public function contact(Request $request)
    {
        // Placeholder contact function
        $request->validate( [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|Email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        
    }
}

/*

*/