@extends('layouts.customer')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Checkout</h2>
    
    <form action="{{ route('checkout.submit') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" name="fullname" class="form-control" value="{{ old('fullname') }}" required>
            @error('fullname') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
            @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="delivery_address" class="form-label">Delivery Address</label>
            <textarea name="delivery_address" class="form-control" required>{{ old('delivery_address') }}</textarea>
            @error('delivery_address') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit Order</button>
    </form>
</div>
@endsection
