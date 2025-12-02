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
Route::get('/products',[ProductController::class,'index'])->name('products.index')
Route::get('/products/{id}',[ProductController::class,'show'])->name('products.show')
Route::get('/search',[ProductController::class,'search'])->name('products.search')