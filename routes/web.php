<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about',[AboutUsController::class,'index']);
Route::post('/contact',[ContactController::class,'contact']);
Route::get('/basket',[BasketController::class,'index']);
Route::get('/products',[ProductsController::class,'index']);

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

Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');

Route::post('/checkout',[App\Http\Controllers\CheckoutController::Class, 'checkout'])->name('placeorder');
