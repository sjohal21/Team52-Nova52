<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//Register Routes
//==============================================================================================
//Customer sign in
Route::get('/register', [RegisterController::class,'show'])
->middleware('guest') //makes sure only unauthenticated users go to this page
->name('register');
Route::get('/register', [RegisterController::class,'register'])
->middleware('guest')
->name('register.submit');
//LogIn Routes

