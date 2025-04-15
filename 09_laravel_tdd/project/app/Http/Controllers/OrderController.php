<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->get();
        return view('zamowienia', compact('orders'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update(['status' => $request->input('status')]);

        return redirect()->route('admin.orders.index')->with('success', 'Status zamówienia został zaktualizowany.');
    }
}
