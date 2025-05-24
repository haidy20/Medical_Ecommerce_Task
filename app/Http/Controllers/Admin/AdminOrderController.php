<?php

namespace App\Http\Controllers\Admin;

// namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;


class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderItems.product')->latest()->paginate(15);
        return view('admin.orders.index', compact('orders'));
    }
}
