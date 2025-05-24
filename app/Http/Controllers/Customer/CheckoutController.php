<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Log;


class CheckoutController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'phone' => [
                'required',
                'regex:/^01[0-9]{9}$/',
                'unique:orders,phone_number',  // افترضت ان العمود اسمه phone_number في جدول orders
            ],
            'delivery_address' => 'required|string|max:500',
        ]);


        $cart = session()->get('cart', []);

        $order = Order::create([
            'full_name' => $validated['fullname'],
            'phone_number' => $validated['phone'],
            'delivery_address' => $validated['delivery_address'],
        ]);

        foreach ($cart as $productId => $details) {
            $order->orderItems()->create([
                'product_id' => $productId,
                'quantity' => $details['quantity'],
                'price' => $details['price'],
            ]);
        }

        session()->forget('cart');

        return redirect()->route('thankyou', ['order' => $order->id])->with('success', 'Order submitted successfully!');
    }

    public function thankyou($orderId)
    {
        $order = Order::findOrFail($orderId);
        return view('customer.thankyou', compact('order'));
    }
}
