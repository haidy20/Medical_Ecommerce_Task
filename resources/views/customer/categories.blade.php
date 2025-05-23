@extends('layouts.app')

@section('content')
<div class="container">
    <h2>All Categories</h2>
    <div class="row">
        @foreach($categories as $category)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $category->name }}</h5>
                        <a href="{{ route('frontend.products.byCategory', $category->id) }}" class="btn btn-primary">View Products</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
