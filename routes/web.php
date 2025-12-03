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

//Product Routes
//===============================================

//display all products 
Route::get('/products',[ProductController::class, 'index'])->name('products.index')

//display one product
Route::get('/products/{product}',[ProductController::class,'showOne'])->name('products.show')

//display searched products
Route::get('/search',[ProductController::class,'search'])->name('products.search')

//===============================================