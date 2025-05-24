@extends('layouts.customer')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-5 fw-bold">All Categories</h2>
    <div class="row">
        @foreach($categories as $category)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 h-100 hover-shadow transition">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-3">{{ $category->name }}</h5>
                        <a href="{{ route('customer.products.byCategory', $category->id) }}" class="btn btn-outline-primary">
                            View Products
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
