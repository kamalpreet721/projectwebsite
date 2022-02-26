<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[LandingPageController::class,'index'])->name('index');
Route::resource('product', ProductController::class);
