@extends('layouts.app')

@section('content')

{{-- ============ HERO ============ --}}
<section class="hero">
    <div class="hero__inner">
        <div class="hero__copy">
            <span class="eyebrow">पारंपरिक &middot; प्रीमियम &middot; शुद्ध शाकाहारी</span>
            <h1 class="hero__headline-mr">खमंग चव, खास तुमच्यासाठी!</h1>
            <p class="hero__headline-en">Authentic Indian Namkeen. Crafted with Tradition. Packed with Quality.</p>
            <p class="hero__body">Experience the irresistible taste of traditional Indian farsan, prepared with carefully selected ingredients, authentic recipes and a commitment to quality.</p>
            <div class="hero__actions">
                <a href="{{ route('shop') }}" class="btn btn--gold">Shop Namkeen</a>
                <a href="#our-story" class="btn btn--outline">Explore Our Story</a>
            </div>
        </div>

        <div class="hero__visual">
            <div class="thali">
                <div class="thali__bowl thali__bowl--1"><span>Sev</span></div>
                <div class="thali__bowl thali__bowl--2"><span>Bhujia</span></div>
                <div class="thali__bowl thali__bowl--3"><span>Gathiya</span></div>
                <div class="thali__bowl thali__bowl--4"><span>Chivda</span></div>
                <div class="thali__bowl thali__bowl--5"><span>Dalmoth</span></div>
                <div class="thali__pouch">
                    <span class="thali__pouch-label">SUDAMA<br>FARSAN</span>
                    <span class="thali__pouch-weight">500g</span>
                </div>
                <svg class="thali__arc" viewBox="0 0 400 400" aria-hidden="true">
                    <circle cx="200" cy="200" r="190" fill="none" stroke="url(#goldGrad)" stroke-width="1.5" stroke-dasharray="4 10"/>
                    <defs>
                        <linearGradient id="goldGrad" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0" stop-color="#C6A15B"/>
                            <stop offset="1" stop-color="#EAD9AE"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
</section>

@include('partials.divider')

{{-- ============ TRUST STRIP ============ --}}
<section class="trust-strip">
    <div class="trust-strip__inner">
        <div class="trust-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><circle cx="12" cy="12" r="9"/><path d="M8 12l3 3 5-6"/></svg>
            <h3>100% Vegetarian</h3>
            <p>Pure vegetarian products</p>
        </div>
        <div class="trust-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M12 2v20M2 12h20"/><circle cx="12" cy="12" r="9"/></svg>
            <h3>Fresh &amp; Hygienic</h3>
            <p>Prepared with care</p>
        </div>
        <div class="trust-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M4 12l6 6L20 6"/></svg>
            <h3>Authentic Taste</h3>
            <p>Traditional Indian recipes</p>
        </div>
        <div class="trust-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M12 3l2.5 5.5L20 9l-4 4 1 6-5-3-5 3 1-6-4-4 5.5-.5z"/></svg>
            <h3>Premium Quality</h3>
            <p>Carefully selected ingredients</p>
        </div>
        <div class="trust-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><rect x="4" y="7" width="16" height="13" rx="1"/><path d="M8 7V5a4 4 0 0 1 8 0v2"/></svg>
            <h3>Secure Packaging</h3>
            <p>Freshness-focused packaging</p>
        </div>
    </div>
</section>

{{-- ============ SHOP / FEATURED PRODUCTS ============ --}}
<section class="section" id="shop">
    <div class="section__head">
        <span class="eyebrow">शॉप</span>
        <h2>Our Most Loved Namkeen</h2>
        <p>Traditional flavours. Modern packaging. One unforgettable taste.</p>
    </div>

    <div class="product-grid">
        @forelse($featuredProducts as $product)
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
        <p class="empty-state">Products will appear here once the database is migrated and seeded — run <code>php artisan migrate --seed</code>.</p>
        @endforelse
    </div>
</section>

@include('partials.divider')

{{-- ============ CATEGORIES ============ --}}
<section class="section section--tint" id="categories">
    <div class="section__head">
        <span class="eyebrow">प्रकार</span>
        <h2>Shop by Category</h2>
    </div>
    <div class="category-grid">
        @forelse($categories as $category)
        <a href="{{ route('shop') }}" class="category-card">
            <span class="category-card__mr">{{ $category->name_marathi }}</span>
            <span class="category-card__en">{{ $category->name }}</span>
        </a>
        @empty
        <p class="empty-state">Categories will appear here once seeded.</p>
        @endforelse
    </div>
</section>

{{-- ============ BRAND STORY ============ --}}
<section class="section story" id="our-story">
    <div class="story__visual"><span>सुदामा</span></div>
    <div class="story__copy">
        <span class="eyebrow">आमची कहाणी</span>
        <h2>The Taste of Tradition</h2>
        <p>{{ $setting->about_us }}</p>
        <a href="#" class="btn btn--outline">Discover Our Story</a>
    </div>
</section>

@include('partials.divider')

{{-- ============ WHY SUDAMA ============ --}}
<section class="section why" id="why-sudama">
    <div class="section__head">
        <span class="eyebrow">आमचे वैशिष्ट्य</span>
        <h2>Why Choose Sudama?</h2>
    </div>
    <div class="why-grid">
        <div class="why-item">
            <h3>Authentic Recipes</h3>
            <p>Traditional flavours passed through generations.</p>
        </div>
        <div class="why-item">
            <h3>Quality Ingredients</h3>
            <p>Carefully selected ingredients for consistent taste.</p>
        </div>
        <div class="why-item">
            <h3>Hygienic Preparation</h3>
            <p>Clean and responsible food preparation.</p>
        </div>
        <div class="why-item">
            <h3>Freshness First</h3>
            <p>Packaging designed to maintain product quality.</p>
        </div>
        <div class="why-item">
            <h3>Made for Every Occasion</h3>
            <p>Perfect for everyday snacks, family gatherings, festivals and celebrations.</p>
        </div>
    </div>
</section>

{{-- ============ 500G PACKAGING SHOWCASE ============ --}}
<section class="section pack-showcase">
    <div class="pack-showcase__copy">
        <span class="eyebrow">पॅकिंग</span>
        <h2>Packed Fresh. Packed with Taste.</h2>
        <a href="{{ route('shop') }}" class="btn btn--gold">Shop 500g Packs</a>
    </div>
    <div class="pack-showcase__visual">
        <div class="pack-mock">SUDAMA<br>FARSAN<br><small>500g</small></div>
    </div>
</section>

@include('partials.divider')

{{-- ============ FESTIVAL / OCCASION ============ --}}
<section class="section occasion">
    <div class="section__head">
        <span class="eyebrow">सण-उत्सव</span>
        <h2>Every Celebration Deserves Something Delicious</h2>
    </div>
    <div class="occasion-grid">
        @foreach(['Diwali','Family Gatherings','Weddings','Festivals','Office Events','Parties'] as $occ)
        <div class="occasion-item">{{ $occ }}</div>
        @endforeach
    </div>
    <div class="occasion__cta">
        <a href="{{ route('contact') }}" class="btn btn--outline">Order for Your Occasion</a>
    </div>
</section>

{{-- ============ BULK ORDERS ============ --}}
<section class="section bulk" id="bulk-orders">
    <div class="bulk__copy">
        <span class="eyebrow">B2B</span>
        <h2>Planning a Bigger Celebration?</h2>
        <p>Special pricing and ordering support for retailers, distributors, events, weddings, offices, hotels and bulk requirements.</p>
        <div class="hero__actions" style="justify-content:center;">
            <a href="https://wa.me/{{ $globalSetting->brand_whatsapp }}" class="btn btn--gold">WhatsApp for Bulk Orders</a>
        </div>
    </div>
</section>

@endsection
