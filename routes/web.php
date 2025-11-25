<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);
