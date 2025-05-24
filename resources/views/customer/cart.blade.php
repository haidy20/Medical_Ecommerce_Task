@extends('layouts.customer')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 fw-bold">Your Shopping Cart</h2>

    @if(session('cart') && count(session('cart')) > 0)
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product</th>
                <th>Image</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Subtotal</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $id => $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td><img src="{{ asset('storage/' . $item['image']) }}" width="60" /></td>
                <td>${{ number_format($item['price'], 2) }}</td>
                <td>
                    <form action="{{ route('cart.update') }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $id }}">
                        <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" style="width: 60px;">
                        <button type="submit" class="btn btn-sm btn-primary float-end">Update</button>
                    </form>
                </td>
                <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                <td>
                    <form action="{{ route('cart.remove') }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $id }}">
                        <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4" class="text-end fw-bold">Total</td>
                <td colspan="2" class="fw-bold text-success">${{ number_format($total, 2) }}</td>
            </tr>
            <tr>
                <td colspan="6" class="text-end">
                    <a href="{{ route('checkout') }}" class="btn btn-success">Proceed to Checkout</a>
                </td>
            </tr>

        </tbody>
    </table>
    @else
    <div class="alert alert-info">Your cart is empty.</div>
    @endif
</div>
@endsection