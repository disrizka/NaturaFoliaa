<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/cooperation', [PageController::class, 'cooperation'])->name('cooperation');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
