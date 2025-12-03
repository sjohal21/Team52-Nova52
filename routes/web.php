<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AuthController;

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
Route::post('/register', [RegisterController::class,'register'])
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

//Order Routes
//==============================================================================================

Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');

Route::post('/checkout',[App\Http\Controllers\CheckoutController::Class, 'checkout'])->name('placeorder');

Route::get('/order_confirmation', [App\Http\Controllers\CheckoutController::class, 'OrderConfirmation'])->name('order.success');
// dont forget {order}

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

//Product Routes
//===============================================

<<<<<<< HEAD
//display all products 
=======
//display all products
>>>>>>> 6070bd9611aec0a87a7390f02cea06c1377309c8
Route::get('/products',[ProductController::class, 'index'])->name('products.index');

//display one product
Route::get('/products/{product}',[ProductController::class,'showOne'])->name('products.show');

//display searched products
Route::get('/search',[ProductController::class,'search'])->name('products.search');

<<<<<<< HEAD
//===============================================
=======
//===============================================
>>>>>>> 6070bd9611aec0a87a7390f02cea06c1377309c8
