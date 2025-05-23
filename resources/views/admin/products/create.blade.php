@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Add Product</h2>

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('admin.products.form')

        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
