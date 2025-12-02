<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('/');
});

//=========================================================
//Product Routes
//=========================================================
//Show products page
Route::get('/products',[ProductController::class,'index'])->name('products.index');
//Show one product
Route::get('/products/{id}',[ProductController::class,'show'])->name('products.show');
//Search for products
Route::get('/search',[ProductController::class,'search'])->name('products.search');