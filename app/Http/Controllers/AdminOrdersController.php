<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrdersController extends Controller
{
   public function index()
   {
      $orders = Order::latest()->paginate(10);

      //   for Orders Deshboard Datas
      // To get the total number of users who placed orders each day, including pending orders.
      $eachDayOrderedUsers = Order::whereDate('updated_at', today())->pluck('user_id')
                                                                     ->unique();

      $pendingOrderedUsers = Order::where('status', 'pending')->whereDate('created_at', '<', today())
                                                               ->pluck('user_id')
                                                               ->unique();
      $totalOrderedUsers = $eachDayOrderedUsers->merge($pendingOrderedUsers)->unique()->count();

      //   To get Order Status Datas and Total orders
      $orderforToday = Order::whereDate('updated_at', today())->get();
      $pendingOrders = Order::where('status', 'pending')->count();
      $finishedOrders = $orderforToday->where('status', 'finished')->count();
      $canceledOrders = $orderforToday->where('status', 'canceled')->count();
      $totalOrders = $pendingOrders + $finishedOrders + $canceledOrders;

      return view('admin.orders.order', [
         'orders' => $orders,
         'orderedUsers' => $totalOrderedUsers,
         'pendingOrders' => $pendingOrders,
         'finishedOrders' => $finishedOrders,
         'canceledOrders' => $canceledOrders,
         'totalOrders' => $totalOrders
      ]);
   }

   // Update order status to "finish"
   public function markAsFinished(Order $order)
   {
      $order->update(['status' => Order::STATUS_FINISHED]);

      return redirect()->back()->with('success', 'Order marked as finished.');
   }

   // Update order status to "cancel"
   public function markAsCanceled(Order $order)
   {
      $order->update(['status' => Order::STATUS_CANCELED]);

      return redirect()->back()->with('success', 'Order marked as canceled.');
   }
}
