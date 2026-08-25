@extends('admin.layout')
@section('title', $category->exists ? 'Edit Category' : 'Add Category')

@section('content')
<h1>{{ $category->exists ? 'Edit Category' : 'Add Category' }}</h1>

<form method="POST"
      action="{{ $category->exists ? route('admin.categories.update', $category) : route('admin.categories.store') }}"
      class="admin-form">
    @csrf
    @if($category->exists) @method('PUT') @endif

    <label>Category Name (English)</label>
    <input type="text" name="name" value="{{ old('name', $category->name) }}" required>

    <label>Category Name (Marathi)</label>
    <input type="text" name="name_marathi" value="{{ old('name_marathi', $category->name_marathi) }}">

    <div class="admin-form__actions">
        <button type="submit" class="admin-btn admin-btn--primary">{{ $category->exists ? 'Update Category' : 'Add Category' }}</button>
        <a href="{{ route('admin.categories.index') }}" class="admin-btn">Cancel</a>
    </div>
</form>
@endsection
