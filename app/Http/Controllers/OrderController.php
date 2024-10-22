<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
{
    $orders = Order::where('user_id', auth()->id())->get();
    return view('index', compact('orders'));
}

    public function __construct()
    {
    $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);
        $totalPrice = $product->price * $request->quantity;
// Создание нового заказа с использованием заполненных данных
        Order::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
            'user_id'=>auth()->id(),
        ]);

        return redirect()->route('show', $product->id)->with('success', 'Заказ успешно создан!');
    }
}