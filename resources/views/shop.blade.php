@extends('layouts.app')
@section('title', 'Shop — Sudama Farsan Namkeen')
@section('content')

<section class="section" style="padding-top:6rem; min-height: 80vh;">
    <div class="section__head">
        <span class="eyebrow">शॉप</span>
        <h1 style="font-size: 3rem; margin-bottom:1rem;">All Products</h1>
        <p>Order directly on WhatsApp — we'll confirm your order, bulk discounts, and delivery details instantly.</p>
    </div>

    <div class="product-grid">
        @forelse($products as $product)
        <div class="product-card">
            <div class="product-card__image">
                @if($product->image_path)
                    <img src="{{ asset('storage/'.$product->image_path) }}" alt="{{ $product->name }}" style="width:100%; height:100%; object-fit:cover;">
                @else
                    <div style="width:100%; height:100%; display:flex; align-items:center; justify-content:center; background:#f0eae1; color:var(--primary-gold); font-family:var(--font-display); font-size:1.5rem;">{{ $product->name }}</div>
                @endif
            </div>
            <div class="product-card__body">
                <h3>{{ $product->name }}</h3>
                <p class="product-card__marathi">{{ $product->name_marathi }}</p>
                <p class="product-card__meta">Pack: {{ $product->pack_size }}</p>
                <p class="product-card__price">₹{{ number_format($product->price, 0) }}
                    @if($product->mrp) <span>₹{{ number_format($product->mrp, 0) }}</span> @endif
                </p>
                <a href="{{ $product->whatsappOrderUrl() }}" class="btn btn--gold btn--sm" style="width:100%; text-align:center;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.1-1.7-.9-2-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.1-.2.2-.3.2-.6.1-.3-.1-1.2-.5-2.3-1.5-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6.1-.1.3-.3.4-.5.1-.1.2-.3.3-.5.1-.2 0-.4 0-.5C10 9 9.4 7.6 9.1 7c-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.2.3-.9.9-.9 2.1 0 1.2.9 2.4 1 2.6.1.2 1.8 2.7 4.3 3.8.6.3 1.1.4 1.4.5.6.2 1.2.2 1.6.1.5-.1 1.7-.7 1.9-1.3.2-.6.2-1.1.2-1.2-.1-.2-.3-.2-.6-.4z"/><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm0 18.2c-1.6 0-3.2-.4-4.5-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2z"/></svg>
                    Order on WhatsApp
                </a>
            </div>
        </div>
        @empty
        <div style="grid-column: 1/-1; text-align:center; padding: 4rem 2rem; background: #fff; border-radius: var(--radius-lg); box-shadow: var(--shadow-soft);">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--primary-gold)" stroke-width="1.5" style="margin-bottom:1rem;"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            <h3 style="margin-bottom:0.5rem;">Shop is getting ready</h3>
            <p style="color:var(--text-muted);">No products yet — run <code>php artisan migrate --seed</code> to populate the store.</p>
        </div>
        @endforelse
    </div>
</section>

@endsection
