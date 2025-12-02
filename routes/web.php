<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');

Route::post('/checkout',[App\Http\Controllers\CheckoutController::Class, 'checkout'])->name('placeorder');

Route::get('/order_confirmation', [App\Http\Controllers\CheckoutController::class, 'OrderConfirmation'])->name('order.success');
// dont forget {order}