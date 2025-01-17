<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\mustBeAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class ,'index']);
Route::get('/register', [AuthController::class ,'create']);
Route::post('/register', [AuthController::class ,'store']);
Route::post('/logout', [AuthController::class ,'destory']);
Route::get('/login', [AuthController::class ,'loginForm']);
Route::post('/login', [AuthController::class ,'loginStore']);
Route::get('/products/{product}', [ProductController::class,'detail']);
Route::get('/products/{product}/checkout', [ProductController::class,'detail']);

Route::middleware(mustBeAdmin::class)
    ->resource('/admin/products',AdminProductController::class);

Route::middleware(mustBeAdmin::class)
    ->resource('/admin/categories',AdminCategoryController::class);


Route::get('/checkout', function () {
    return view('checkout');
});