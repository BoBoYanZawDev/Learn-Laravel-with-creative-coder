<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(){
        request()->validate([
            'name' => "required",
            'phone' => "required",
            'shopping_address' => "required",
            'screenshot' => "required",
            'notes' => "required",
        ]);

        $screenshot = request('screenshot');
        $path = '/storage/'.$screenshot->store('screenshots');

        $user = auth()->user();
        $user->name = request('name');
        $user->phone = request('phone');
        $user->save();

        $order = new Order();
        $order->user_id = $user->id;
        $order->total_price = $user->getTotalPrice();
        $order->address = request('shopping_address');
        $order->notes = request('notes');
        $order->screenshot = $path;
        $order->save();
        
        $carts = auth()->user()->cartProducts;
        $orderProducts = [];
        foreach($carts as $cart){
            $orderProducts[$cart->id] = ['quantity' => $cart->pivot->quantity];
        }
        $order->products()->attach($orderProducts);

        auth()->user()->cartProducts()->detach();
        return redirect()->route('orders.history');
        }

        public function userOrdersHistory(){
           return view('checkout.orderHistory',[
            'orders'=> auth()->user()->orders()->latest()->paginate(10)
           ]);
        }
}
