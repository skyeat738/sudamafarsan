@extends('admin.layout')
@section('title', 'Categories')

@section('content')
<div class="admin-page-head">
    <h1>Categories</h1>
    <a href="{{ route('admin.categories.create') }}" class="admin-btn admin-btn--primary">+ Add Category</a>
</div>

<table class="admin-table">
    <thead>
        <tr>
            <th>Name (English)</th>
            <th>Name (Marathi)</th>
            <th>Products</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->name_marathi }}</td>
            <td>{{ $category->products_count }}</td>
            <td class="admin-table__actions">
                <a href="{{ route('admin.categories.edit', $category) }}">Edit</a>
                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Delete this category?');">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="4">No categories yet.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
