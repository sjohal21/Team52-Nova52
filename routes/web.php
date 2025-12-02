<?php

use App\Http\Controllers\BasketController;

Route::get('/basket', [BasketController::class, 'view']);
Route::post('/basket/add', [BasketController::class, 'add']);
Route::put('/basket/{id}', [BasketController::class, 'update']);
Route::delete('/basket/{id}', [BasketController::class, 'remove']);
Route::delete('/basket', [BasketController::class, 'clear']);

Route::get('/', function () {
    return view('home');
});

