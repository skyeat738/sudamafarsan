@extends('admin.layout')
@section('title', 'Products')

@section('content')
<div class="admin-page-head">
    <h1>Products</h1>
    <a href="{{ route('admin.products.create') }}" class="admin-btn admin-btn--primary">+ Add Product</a>
</div>

<table class="admin-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Pack</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Featured</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse($products as $product)
        <tr>
            <td>{{ $product->name }}<br><small>{{ $product->name_marathi }}</small></td>
            <td>{{ $product->category->name ?? '—' }}</td>
            <td>{{ $product->pack_size }}</td>
            <td>₹{{ number_format($product->price, 0) }}</td>
            <td>{{ str_replace('_', ' ', $product->stock_status) }}</td>
            <td>{{ $product->is_featured ? 'Yes' : 'No' }}</td>
            <td class="admin-table__actions">
                <a href="{{ route('admin.products.edit', $product) }}">Edit</a>
                <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Delete this product?');">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="7">No products yet.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
