<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//Sign Up Routes
Route::get('/register', [RegisterController::class,'show'])->name('register');
Route::get('/register', [RegisterController::class,'register'])->name('register.submit');
