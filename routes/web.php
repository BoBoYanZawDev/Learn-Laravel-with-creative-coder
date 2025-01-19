<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\mustBeAdmin;
use App\Http\Middleware\MustBeLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class ,'index']);
Route::get('/register', [AuthController::class ,'create']);
Route::post('/register', [AuthController::class ,'store']);
Route::post('/logout', [AuthController::class ,'destory']);
Route::get('/login', [AuthController::class ,'loginForm'])->name('login');
Route::post('/login', [AuthController::class ,'loginStore']);
Route::get('/products/{product}', [ProductController::class,'detail'])->name('productDetail');
Route::post('/add-to-cart/{product}',[cartController::class,'addToCart']);
Route::get('/products/{product}/checkout', [cartController::class,'show'])->middleware(MustBeLogin::class);


Route::middleware(mustBeAdmin::class)
    ->resource('/admin/products',AdminProductController::class); 

Route::middleware(mustBeAdmin::class)
    ->resource('/admin/categories',AdminCategoryController::class);

Route::middleware(mustBeAdmin::class)
    ->resource('/admin/users',AdminUserController::class);

