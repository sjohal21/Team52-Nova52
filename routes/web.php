<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use App\Models\Wishlist;
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

Route::view('faq', 'faq')->name('faq');
Route::view('/shipping-returns', 'shippingReturns')->name('shipping.returns');
Route::view('/privacy-policy', 'privacyPolicy')->name('privacy.policy');
Route::view('/terms-conditions', 'termsConditions')->name('terms.conditions');

// Basket routes
//
// Get basket view
Route::get('/basket',[BasketController::class,'index']);
// Add item to basket
Route::post('/basket/add',[BasketController::class,'add'])->middleware('auth'); // Parameters: product_id, quantity
// Update basket item by ID
Route::post('/basket/update',[BasketController::class,'update']); // Parameters - quantity, product_id
// Remove item from basket by ID
Route::post('/basket/remove',[BasketController::class,'remove']); // Parameters: product_id
// Clear basket
Route::post('/basket/clear',[BasketController::class,'clear']);

Route::get('/products',[ProductsController::class,'index']);

// Wishlist routes

// Wishlist index
Route::get('/wishlist',[WishlistController::class,'index']);

// Wishlist add item
Route::post('/wishlist/add',[WishlistController::class,'add']);

// Wishlist remove item
Route::post('/wishlist/remove',[WishlistController::class,'remove']);

// Wishlist clear
Route::post('/wishlist/clear',[WishlistController::class,'clear']);

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

Route::get('/logout', [LoginController::class,'logout'])
->middleware('auth')
->name('logout');

//Order Routes
//==============================================================================================

Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->middleware('auth')->name('checkout'); //Only logged in users can access checkout

Route::post('/checkout',[App\Http\Controllers\CheckoutController::Class, 'checkout'])->middleware('auth')->name('placeorder'); //Only logged in users can place order

Route::get('/order_confirmation/{order}', [App\Http\Controllers\CheckoutController::class, 'OrderConfirmation'])->middleware('auth')->name('order.success'); // Only logged in users can access order confirmation
// dont forget {order}

//==============================================================================================
//Admin Routes

//Only users that are logged in will be able to access these routes
Route::middleware(['auth','admin'])->group(function() {
    //Main Admin Dashboard route
    Route::get('/admin/dashboard',[AdminDashboardController::class,'show'])
    ->name('admin.dashboard');
    //Admin User Management
    Route::get('/admin/users',[AdminUserController::class,'show'])
    ->name('admin.users.show');
    //Promotion and Demotion
    Route::post('/admin/users/promote',[AdminUserController::class,'promote'])
    ->name('admin.users.promote');
    Route::post('admin/users/demote',[AdminUserController::class,'demote'])
    ->name('admin.users.demote');
     
});

//Product Routes
//===============================================

//display all products
Route::get('/products',[ProductController::class, 'index'])->name('products.index');

//display one product
Route::get('/products/{product}',[ProductController::class,'showOne'])->name('products.show');

//display searched products
Route::get('/search',[ProductController::class,'search'])->name('products.search');
