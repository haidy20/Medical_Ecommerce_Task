@extends('layouts.customer')

@section('content')
<div class="container mt-5 d-flex flex-column justify-content-center align-items-center" style="min-height: 60vh; text-align: center;">
    <h2 class="mb-4" style="font-weight: 700; color: #2c3e50;">Thank You!</h2>
    <p class="mb-3" style="font-size: 1.2rem; color: #34495e;">Your order has been submitted successfully.</p>

    <p style="font-size: 1.1rem; margin-top: 20px;">
        Thank you for your purchase! Your order number is: 
        <strong style="font-size: 1.3rem; color: #27ae60;">#{{ $order->id }}</strong>
    </p>

    <p style="margin-top: 15px; font-size: 1.1rem;">
        You can view your order summary by clicking the link below:
    </p>

    <a href="{{ route('order.summary', ['order' => $order->id]) }}" 
       class="btn btn-success mt-3 px-4 py-2" 
       style="font-weight: 600; font-size: 1rem; border-radius: 5px;">
        View Order Summary
    </a>
</div>
@endsection
