<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $product->name ?? '') }}">
    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label>Price</label>
    <input type="number" name="price" class="form-control" value="{{ old('price', $product->price ?? '') }}">
    @error('price') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label>Category</label>
    <select name="category_id" class="form-control">
        <option value="">Select Category</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                {{ (old('category_id', $product->category_id ?? '') == $category->id) ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error('category_id') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control">{{ old('description', $product->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
    @if(!empty($product->image))
        <img src="{{ asset('storage/' . $product->image) }}" width="100" class="mt-2">
    @endif
</div>
