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
//LogIn/Out Routes
//==============================================================================================
Route::get('/login', [LoginController::class,'show'])
->middleware('guest')
->name('login');

Route::post('/login', [LoginController::class,'login'])
->middleware('guest')
->name('login.submit');

Route::post('/logout', [LoginController::class,'logout'])
->middleware('auth')
->name('logout');
//==============================================================================================