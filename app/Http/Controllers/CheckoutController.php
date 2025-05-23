<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
       return view('checkout.checkout',[
            'products' => auth()->user()->cartProducts,
            'totalPrice' => auth()->user()->getTotalPrice()
       ]);
    }
}
