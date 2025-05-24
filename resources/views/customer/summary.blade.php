@extends('layouts.customer')

@section('content')
<div class="container mt-5" style="max-width: 900px;">
    <h2 class="text-center mb-4" style="font-weight: 700; color: #2c3e50;">Order Summary</h2>

    <h4 class="text-center mb-3" style="color: #34495e; font-weight: 600;">Customer Details</h4>
    <ul class="list-group mb-4" style="font-size: 1.1rem;">
        <li class="list-group-item"><strong>Full Name:</strong> {{ $order->full_name }}</li>
        <li class="list-group-item"><strong>Phone:</strong> {{ $order->phone_number }}</li>
        <li class="list-group-item"><strong>Delivery Address:</strong> {{ $order->delivery_address }}</li>
        <li class="list-group-item"><strong>Order Date:</strong> {{ $order->created_at->format('d-m-Y H:i') }}</li>
    </ul>

    <h4 class="text-center mb-3" style="color: #34495e; font-weight: 600;">Order Items</h4>
    <table class="table table-striped table-bordered shadow-sm">
        <thead class="table-dark text-center">
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price (each)</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0; @endphp
            @foreach($order->orderItems as $item)
                @php $subtotal = $item->quantity * $item->price; @endphp
                <tr class="text-center">
                    <td>{{ $item->product->name ?? 'Product not found' }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ number_format($item->price, 2) }}</td>
                    <td>${{ number_format($subtotal, 2) }}</td>
                </tr>
                @php $total += $subtotal; @endphp
            @endforeach
        </tbody>
        <tfoot class="table-secondary text-center fw-bold">
            <tr>
                <td colspan="3" class="text-end">Total</td>
                <td>${{ number_format($total, 2) }}</td>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
