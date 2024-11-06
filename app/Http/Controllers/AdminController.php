<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class AdminController extends Controller
{
    public function index()
{
    if (auth()->user()->role !== 'admin') {
        abort(403);
    }

    $orders = Order::with('product', 'user')->get(); 
    return view('admin', compact('orders'));
}

public function approveOrder($id)
{
    $order = Order::find($id);

    if ($order->product->amount >= $order->quantity) {
        $order->product->amount-=$order->quantity;
        $order->status = 'approved';
        $order->save();
        $order->product->save();
    }
    return redirect()->back();
}

public function deliverOrder($id)
{
    $order = Order::find($id);
    $order->status = 'delivered';
    $order->save();
    return redirect()->back();
}
}