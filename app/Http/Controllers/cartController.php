<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function addToCart(Product $product)
    {
        $user = auth()->user();
        if ($user->cartProducts->contains('id', $product->id)) {
            $currentQuantity = $user->cartProducts()->where('product_id', $product->id)->first()->pivot->quantity;
            $newQuantity = $currentQuantity + request('quantity');
            $user->cartProducts()->updateExistingPivot($product->id, ['quantity' => $newQuantity]);
            return redirect('/checkout');
        } else {
            $user->cartProducts()->attach($product->id, ['quantity' => request('quantity')]);
            return redirect('/checkout');
        }
    }
    public function removeFromCart(Product $product)
    {
        auth()->user()->cartProducts()->detach($product->id);
        return back();
    }
}
