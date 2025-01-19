<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function show()
    {
       return view('checkout');
    }
    public function addToCart(Product $product)
    {
        $user = auth()->user();
        if($user->cartProducts->contains('id',$product->id)){
            $user->cartProducts()->updateExistingPivot($product->id, ['quantity' => request('quantity')]);
            return redirect('/products/'.$product->id.'/checkout');
        }else{
            $user->cartProducts()->attach($product->id ,['quantity' => request('quantity')]);
            return redirect('/products/'.$product->id.'/checkout');
        }
    }
}
