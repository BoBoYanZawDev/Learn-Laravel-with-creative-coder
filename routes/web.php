<?php

use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class ,'index']);
Route::get('/products/{product}', [ProductController::class,'detail']);

Route::get('/admin/products', [AdminProductController::class, 'index']);
Route::get('/admin/products/create', [AdminProductController::class, 'create']);
Route::post('/admin/products/productCreate', [AdminProductController::class, 'createProduct']);
Route::post('/admin/products/{product}/delete', [AdminProductController::class, 'delete']);


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/checkout', function () {
    return view('checkout');
});