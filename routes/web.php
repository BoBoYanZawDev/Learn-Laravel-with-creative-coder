<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminOrdersController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
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

Route::middleware(MustBeLogin::class)
    ->controller(cartController::class)
    ->group(function(){
      Route::post('/add-to-cart/{product}', 'addToCart')->name('addToCart');
      Route::delete('/remove-from-cart/{product}','removeFromCart')->name('removeFromCart');
    });

Route::middleware(MustBeLogin::class)
    ->group(function(){
      Route::get('/checkout', [CheckoutController::class,'index'])->name('checkout');
      Route::post('/orders/store', [OrderController::class,'store'])->name('orders.store');
      Route::get('/orders/history', [OrderController::class,'userOrdersHistory'])->name('orders.history');
    });

// for Backend
Route::middleware(mustBeAdmin::class)
    ->resource('/admin/products',AdminProductController::class); 

Route::middleware(mustBeAdmin::class)
    ->resource('/admin/categories',AdminCategoryController::class);

Route::middleware(mustBeAdmin::class)
    ->resource('/admin/users',AdminUserController::class);

Route::middleware(mustBeAdmin::class)
    ->prefix('/admin')
    ->controller(AdminOrdersController::class)
    ->group(function (){
        Route::get('/orders','index')->name('admin.orders.index');
    });