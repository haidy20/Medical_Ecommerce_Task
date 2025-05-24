@extends('layouts.customer')

@section('content')
<style>
    .product-card {
        background-color: rgba(255, 255, 255, 0.85);
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 20px;
    }

    .product-card:hover {
        background-color: #ffffff;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
    }

    .product-image {
        height: 160px;
        /* صغرنا الصورة شوي */
        max-width: 100%;
        object-fit: contain;
        margin-bottom: 20px;
    }

    .btn-add-cart {
        border-radius: 25px;
        padding: 8px 20px;
        font-weight: 600;
    }

    /* زيادة التباعد بين الأعمدة (يمكن تعديل حسب الرغبة) */
    .col-md-3 {
        margin-bottom: 40px;
    }
</style>

<div class="container mt-4">
    <h2 class="text-center mb-5 fw-bold">All Medical Products</h2>
    <div class="row g-5"> <!-- زيادة المسافة بين الأعمدة والصفوف -->
        @foreach($products as $product)
        <div class="col-md-3">
            <div class="card product-card">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image mx-auto d-block">
                <h5 class="text-center">{{ $product->name }}</h5>
                <p class="text-center fw-bold text-primary">${{ number_format($product->price, 2) }}</p>
                <div class="d-grid">
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="btn btn-outline-success btn-sm btn-add-cart">
                            Add to Cart
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection