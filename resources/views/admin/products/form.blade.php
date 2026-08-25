@extends('admin.layout')
@section('title', $product->exists ? 'Edit Product' : 'Add Product')

@section('content')
<h1>{{ $product->exists ? 'Edit Product' : 'Add Product' }}</h1>

<form method="POST"
      action="{{ $product->exists ? route('admin.products.update', $product) : route('admin.products.store') }}"
      enctype="multipart/form-data" class="admin-form">
    @csrf
    @if($product->exists) @method('PUT') @endif

    <label>Product Name (English)</label>
    <input type="text" name="name" value="{{ old('name', $product->name) }}" required>

    <label>Product Name (Marathi)</label>
    <input type="text" name="name_marathi" value="{{ old('name_marathi', $product->name_marathi) }}">

    <label>Category</label>
    <select name="category_id">
        <option value="">— None —</option>
        @foreach($categories as $category)
        <option value="{{ $category->id }}" @selected(old('category_id', $product->category_id) == $category->id)>{{ $category->name }}</option>
        @endforeach
    </select>

    <label>Description</label>
    <textarea name="description" rows="3">{{ old('description', $product->description) }}</textarea>

    <div class="admin-form__row">
        <div>
            <label>Pack Size</label>
            <input type="text" name="pack_size" value="{{ old('pack_size', $product->pack_size ?? '500g') }}" required>
        </div>
        <div>
            <label>Price (₹)</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" required>
        </div>
        <div>
            <label>MRP (₹, optional)</label>
            <input type="number" step="0.01" name="mrp" value="{{ old('mrp', $product->mrp) }}">
        </div>
    </div>

    <label>Stock Status</label>
    <select name="stock_status">
        @foreach(['in_stock' => 'In Stock', 'low_stock' => 'Low Stock', 'out_of_stock' => 'Out of Stock'] as $value => $label)
        <option value="{{ $value }}" @selected(old('stock_status', $product->stock_status) == $value)>{{ $label }}</option>
        @endforeach
    </select>

    <label class="admin-checkbox">
        <input type="checkbox" name="is_featured" value="1" @checked(old('is_featured', $product->is_featured))>
        Show on homepage (featured)
    </label>

    <label>Product Image</label>
    @if($product->image_path)
        <img src="{{ asset('storage/'.$product->image_path) }}" alt="{{ $product->name }}" class="admin-form__preview">
    @endif
    <input type="file" name="image" accept="image/*">

    <div class="admin-form__actions">
        <button type="submit" class="admin-btn admin-btn--primary">{{ $product->exists ? 'Update Product' : 'Add Product' }}</button>
        <a href="{{ route('admin.products.index') }}" class="admin-btn">Cancel</a>
    </div>
</form>
@endsection
