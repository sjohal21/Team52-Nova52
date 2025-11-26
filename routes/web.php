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
//Admin Routes

//Only users that are logged in will be able to access these routes
Route::middleware(['auth','admin'])->group(function() {
    Route::get('/admin/dashboard',[AdminDashboardController::class,'show'])
    ->name('admin.dashboard');

    Route::get('/admin/users',[AdminDashboardController::class,'manageUsers'])
    ->name('admin.users');

    Route::post('/admin/promote',[AdminDashboardController::class,'promoteUser'])
    ->name('admin.promote');

    Route::post('/admin/demote',[AdminDashboardController::class,'demoteUser'])
    ->name('admin.demote');
});