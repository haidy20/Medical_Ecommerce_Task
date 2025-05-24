<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Log;


class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $total = collect($cart)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });

        return view('customer.cart', compact('cart', 'total'));
    }

  public function add(Request $request)
{
    Log::info('Inside add to cart');
    Log::info($request->all());
    
    $product = Product::findOrFail($request->product_id);

    $cart = session()->get('cart', []);

    if (isset($cart[$product->id])) {
        $cart[$product->id]['quantity']++;
    } else {
        $cart[$product->id] = [
            'name' => $product->name,
            'price' => $product->price,
            'image' => $product->image,
            'quantity' => 1,
        ];
    }

    session()->put('cart', $cart);

    return redirect()->route('cart.index')->with('success', 'Product added to cart!');
}



    public function update(Request $request)
    {
        if ($request->product_id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->product_id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            return back()->with('success', 'Cart updated!');
        }
    }

    public function remove(Request $request)
    {
        $cart = session()->get('cart');
        unset($cart[$request->product_id]);
        session()->put('cart', $cart);
        return back()->with('success', 'Item removed!');
    }
}
