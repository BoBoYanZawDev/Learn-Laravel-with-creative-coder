<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AuthController;
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

Route::middleware(mustBeAdmin::class)
    ->prefix('/admin/products')
    ->controller(AdminProductController::class)
    ->group(function () {
        Route::get('','index');
        Route::get('/create','create');
        Route::post('/store',  'createProduct');
        Route::post('/{product}/delete', 'delete');
        Route::get('{product}/edit' ,'edit');
        Route::post('/{product}/update', 'update');
});

Route::middleware(mustBeAdmin::class)
    ->prefix('/admin/categories')
    ->controller(AdminCategoryController::class)
    ->group(function () {
    Route::get('',  'index');
    Route::get('/create','create');
    Route::post('/store','store');
    Route::post('/{category}/destory', 'destory');
    Route::get('/{category}/edit','edit');
    Route::post('/{category}/update', 'update');
});


Route::get('/checkout', function () {
    return view('checkout');
});