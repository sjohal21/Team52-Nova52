<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about',[AboutUsController::class,'index']);
Route::post('/contact',[ContactController::class,'contact']);
Route::get('/basket',[BasketController::class,'index']);
