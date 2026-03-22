<?php

namespace App\Http\Controllers;

use App\Models\ReturnedItem;
use Illuminate\Http\Request;

class AdminReturnsController extends Controller
{
    public function index()
    {
        return view('admin.returns.index')->with(['returns'=>ReturnedItem::all()]);
    }
}
