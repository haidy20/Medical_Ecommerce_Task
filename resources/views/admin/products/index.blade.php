@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 style="text-align: center;">Products</h2>

    <form method="GET" action="{{ route('admin.products.index') }}" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search products..." class="form-control" />
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>


    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Add Product</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>${{ $product->price }}</td>
                <td>{{ $product->category->name ?? '—' }}</td>
                <td>
                    @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" width="50">
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form method="POST" action="{{ route('admin.products.destroy', $product->id) }}" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if($products->isEmpty())
    <p class="text-center text-muted fst-italic my-4" style="font-size: 1.2rem;">
        No products found.
    </p>
    @endif


    {{ $products->links() }}
</div>
@endsection