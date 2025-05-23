@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Category</h2>
    <form action="{{ route('admin.categories.update', $category) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name', $category->name) }}">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
