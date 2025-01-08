<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class ,'index']);
Route::get('/register', [AuthController::class ,'create']);
Route::post('/register', [AuthController::class ,'store']);
Route::post('/logout', [AuthController::class ,'destory']);
Route::get('/products/{product}', [ProductController::class,'detail']);

Route::get('/admin/products', [AdminProductController::class, 'index']);
Route::get('/admin/products/create', [AdminProductController::class, 'create']);
Route::post('/admin/products/store', [AdminProductController::class, 'createProduct']);
Route::post('/admin/products/{product}/delete', [AdminProductController::class, 'delete']);
Route::get('/admin/products/{product}/edit', [AdminProductController::class, 'edit']);
Route::post('/admin/products/{product}/update', [AdminProductController::class, 'update']);

Route::get('/admin/categories', [AdminCategoryController::class, 'index']);
Route::get('/admin/categories/create', [AdminCategoryController::class, 'create']);
Route::post('/admin/categories/store', [AdminCategoryController::class, 'store']);
Route::post('/admin/categories/{category}/destory', [AdminCategoryController::class, 'destory']);
Route::get('/admin/categories/{category}/edit', [AdminCategoryController::class, 'edit']);
Route::post('/admin/categories/{category}/update', [AdminCategoryController::class, 'update']);


Route::get('/login', function () {
    return view('login');
});

Route::get('/checkout', function () {
    return view('checkout');
});