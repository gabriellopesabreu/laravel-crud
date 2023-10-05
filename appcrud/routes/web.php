<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name(name:'home');

Route::get('/products', [ProductController::class, 'products'])->name(name:'products');

Route::get('/addproduct', [ProductController::class, 'addproduct'])->name(name:'addproduct');

Route::post('/save', [ProductController::class, 'save'])->name(name:'save');