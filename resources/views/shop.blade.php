@extends('layouts.app')

@section('title', 'Shop — Sudama Farsan Namkeen')

@section('content')
<section class="section" style="padding-top:3rem;">
    <div class="section__head">
        <span class="eyebrow">शॉप</span>
        <h2>All Products</h2>
        <p>Order directly on WhatsApp — we'll confirm your order and delivery details there.</p>
    </div>

    <div class="product-grid">
        @forelse($products as $product)
        <div class="product-card">
            <div class="product-card__image">
                @if($product->image_path)
                    <img src="{{ asset('storage/'.$product->image_path) }}" alt="{{ $product->name }}" style="width:100%; height:100%; object-fit:cover;">
                @else
                    <span>{{ $product->name }}</span>
                @endif
            </div>
            <div class="product-card__body">
                <h3>{{ $product->name }}</h3>
                <p class="product-card__marathi">{{ $product->name_marathi }}</p>
                <p class="product-card__meta">{{ $product->pack_size }}</p>
                <p class="product-card__price">₹{{ number_format($product->price, 0) }}
                    @if($product->mrp) <span>₹{{ number_format($product->mrp, 0) }}</span> @endif
                </p>
                <a href="{{ $product->whatsappOrderUrl() }}" class="btn btn--gold btn--sm" style="width:100%; text-align:center;">Order on WhatsApp</a>
            </div>
        </div>
        @empty
        <p class="empty-state">No products yet — run <code>php artisan migrate --seed</code>.</p>
        @endforelse
    </div>
</section>
@endsection
