@extends('admin.layout')
@section('title', 'Dashboard')

@section('content')
<h1>Dashboard</h1>
<div class="admin-stats">
    <div class="admin-stat-card">
        <span>{{ $stats['products'] }}</span>
        <p>Total Products</p>
    </div>
    <div class="admin-stat-card">
        <span>{{ $stats['categories'] }}</span>
        <p>Categories</p>
    </div>
    <div class="admin-stat-card">
        <span>{{ $stats['in_stock'] }}</span>
        <p>In Stock</p>
    </div>
    <div class="admin-stat-card">
        <span>{{ $stats['out_of_stock'] }}</span>
        <p>Out of Stock</p>
    </div>
</div>

<div class="admin-quick-actions">
    <a href="{{ route('admin.products.create') }}" class="admin-btn admin-btn--primary">+ Add Product</a>
    <a href="{{ route('admin.categories.create') }}" class="admin-btn">+ Add Category</a>
</div>
@endsection
