<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[LandingPageController::class,'index'])->name('index');
Route::resource('product', ProductController::class);
Route::resource('cart', CartController::class);
Route::get('/cart/add/{product?}',[CartController::class,'add'])->name('cart.add');
