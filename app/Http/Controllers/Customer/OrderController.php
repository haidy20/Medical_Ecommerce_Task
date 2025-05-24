<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show(Order $order)
    {
        $order->load('orderItems.product'); // جلب بيانات المنتجات مع الطلب
        return view('customer.summary', compact('order'));
    }
}