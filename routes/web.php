<?php

use Illuminate\Support\Facades\Route;

// Halaman Customer
Route::view('/', 'pages.home')->name('home');
Route::view('/auth', 'pages.auth')->name('auth');
Route::view('/checkout', 'pages.checkout')->name('checkout');

// Halaman Admin (Slicing FE dulu tanpa middleware auth)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
    Route::view('/orders', 'admin.orders.index')->name('orders');
    Route::view('/menus', 'admin.menus.index')->name('menus');
});