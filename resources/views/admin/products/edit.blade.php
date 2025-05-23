@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Edit Product</h2>

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        @include('admin.products.form')

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
