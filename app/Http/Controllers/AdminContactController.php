<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index()
    {
        return view('admin.contactrequests')->with(['contacts'=>Contact::all()]);
    }
}
