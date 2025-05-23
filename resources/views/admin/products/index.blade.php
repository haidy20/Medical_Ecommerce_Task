
@extends('layouts.admin')

@section('content')
<div class="container mt-4">
   <h2 style="text-align: center;">Products</h2>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Add Product</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th><th>Price</th><th>Category</th><th>Image</th><th>Actions</th>
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
                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $products->links() }}
</div>
@endsection

