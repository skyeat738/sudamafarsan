@extends('layouts.app')
@section('content')

{{-- ============ HERO ============ --}}
<section class="hero" style="position: relative; overflow: hidden; background: linear-gradient(to right, rgba(253, 251, 247, 0.9), rgba(253, 251, 247, 0.7)), url('https://www.transparenttextures.com/patterns/stardust.png'); padding: 6rem 2rem 4rem; min-height: 80vh; display: flex; align-items: center;">
    <div class="hero__inner" style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: center; gap: 3rem;">
        
        <div class="hero__copy" style="flex: 1 1 500px; z-index: 2;">
            <span class="eyebrow">पारंपरिक &middot; प्रीमियम &middot; शुद्ध शाकाहारी</span>
            <h1 class="hero__headline-mr" style="font-family: var(--font-marathi); font-size: clamp(3rem, 5vw, 4.5rem); line-height: 1.1; margin-bottom: 1rem; color: var(--primary-maroon);">खमंग चव, खास तुमच्यासाठी!</h1>
            <p class="hero__headline-en" style="font-size: 1.4rem; font-weight: 600; color: var(--primary-gold); margin-bottom: 1rem;">Authentic Indian Namkeen. Crafted with Tradition. Packed with Quality.</p>
            <p class="hero__body" style="font-size: 1.1rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 2rem; max-width: 90%;">Experience the irresistible taste of traditional Indian farsan, prepared with carefully selected ingredients, authentic recipes and a commitment to quality.</p>
            <div class="hero__actions" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="{{ route('shop') }}" class="btn btn--gold">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    Shop Namkeen
                </a>
                <a href="#our-story" class="btn btn--outline">Explore Our Story</a>
            </div>
        </div>

        <div class="hero__visual" style="flex: 1 1 400px; position: relative; display: flex; justify-content: center; z-index: 1;">
            <div class="thali" style="position: relative; width: 400px; height: 400px; background: radial-gradient(circle, #fff 0%, #f4eee3 100%); border-radius: 50%; box-shadow: 0 30px 60px rgba(0,0,0,0.1); border: 8px solid var(--primary-gold);">
                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                    <span style="font-family: var(--font-display); font-size: 2rem; color: var(--primary-maroon); font-weight: bold; line-height: 1.2;">SUDAMA<br><span style="color:var(--primary-gold);">FARSAN</span></span>
                </div>
                <svg class="thali__arc" viewBox="0 0 400 400" aria-hidden="true" style="position: absolute; top:0; left:0; width:100%; height:100%; animation: spin 20s linear infinite;">
                    <circle cx="200" cy="200" r="180" fill="none" stroke="url(#goldGrad)" stroke-width="2" stroke-dasharray="10 15"/>
                    <defs>
                        <linearGradient id="goldGrad" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0" stop-color="#C6A15B"/>
                            <stop offset="1" stop-color="#7A1D1D"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
    <style>@keyframes spin { 100% { transform: rotate(360deg); } }</style>
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
                <div class="product-card__badge">Bestseller</div>
                @if($product->image_path)
                    <img src="{{ asset('storage/'.$product->image_path) }}" alt="{{ $product->name }}" style="width:100%; height:100%; object-fit:cover;">
                @else
                    <div style="width:100%; height:100%; display:flex; align-items:center; justify-content:center; background:#f0eae1; color:var(--primary-gold); font-family:var(--font-display); font-size:1.5rem;">{{ $product->name }}</div>
                @endif
            </div>
            <div class="product-card__body">
                <h3>{{ $product->name }}</h3>
                <p class="product-card__marathi">{{ $product->name_marathi }}</p>
                <p class="product-card__meta">Pack Size: {{ $product->pack_size }}</p>
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
        <p class="empty-state" style="grid-column: 1/-1; text-align:center; padding: 3rem; background: #fff; border-radius:12px;">Products will appear here once the database is migrated and seeded.</p>
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
        <p class="empty-state" style="text-align:center; width:100%;">Categories will appear here once seeded.</p>
        @endforelse
    </div>
</section>

{{-- ============ HOW IT'S MADE (NEW SECTION) ============ --}}
<section class="section">
    <div class="section__head">
        <span class="eyebrow">प्रक्रिया</span>
        <h2>The Sudama Promise</h2>
        <p>Crafted with love, hygiene, and generations of expertise.</p>
    </div>
    <div style="display:flex; flex-wrap:wrap; gap:2rem; justify-content:center; text-align:center;">
        <div style="flex:1 1 250px; padding:2rem; background:#fff; border-radius:var(--radius-lg); box-shadow:var(--shadow-soft);">
            <div style="width:70px; height:70px; background:var(--gold-light); color:var(--primary-maroon); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; font-size:2rem; font-family:var(--font-display); font-weight:bold;">1</div>
            <h3 style="margin-bottom:0.5rem;">Pure Ingredients</h3>
            <p style="color:var(--text-muted); font-size:0.95rem;">Sourced from the finest local farms to ensure authenticity and quality in every bite.</p>
        </div>
        <div style="flex:1 1 250px; padding:2rem; background:#fff; border-radius:var(--radius-lg); box-shadow:var(--shadow-soft);">
            <div style="width:70px; height:70px; background:var(--gold-light); color:var(--primary-maroon); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; font-size:2rem; font-family:var(--font-display); font-weight:bold;">2</div>
            <h3 style="margin-bottom:0.5rem;">Traditional Roasting</h3>
            <p style="color:var(--text-muted); font-size:0.95rem;">Slow-cooked and blended using heritage recipes to lock in that perfect crunch.</p>
        </div>
        <div style="flex:1 1 250px; padding:2rem; background:#fff; border-radius:var(--radius-lg); box-shadow:var(--shadow-soft);">
            <div style="width:70px; height:70px; background:var(--gold-light); color:var(--primary-maroon); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; font-size:2rem; font-family:var(--font-display); font-weight:bold;">3</div>
            <h3 style="margin-bottom:0.5rem;">Sealed Fresh</h3>
            <p style="color:var(--text-muted); font-size:0.95rem;">Packaged immediately in premium food-grade pouches to deliver fresh to your door.</p>
        </div>
    </div>
</section>

@include('partials.divider')

{{-- ============ BRAND STORY ============ --}}
<section class="section story" id="our-story">
    <div class="story__visual"><span>सुदामा</span></div>
    <div class="story__copy">
        <span class="eyebrow">आमची कहाणी</span>
        <h2>The Taste of Tradition</h2>
        <p style="font-size: 1.1rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 2rem;">{{ $setting->about_us }}</p>
        <a href="#" class="btn btn--outline">Discover Our Story</a>
    </div>
</section>

{{-- ============ WHY SUDAMA ============ --}}
<section class="section why section--tint" id="why-sudama">
    <div class="section__head">
        <span class="eyebrow">आमचे वैशिष्ट्य</span>
        <h2>Why Choose Sudama?</h2>
    </div>
    <div class="why-grid">
        <div class="why-item">
            <h3 style="color:var(--primary-maroon);">Authentic Recipes</h3>
            <p style="color:var(--text-muted);">Traditional flavours passed through generations.</p>
        </div>
        <div class="why-item">
            <h3 style="color:var(--primary-maroon);">Quality Ingredients</h3>
            <p style="color:var(--text-muted);">Carefully selected ingredients for consistent taste.</p>
        </div>
        <div class="why-item">
            <h3 style="color:var(--primary-maroon);">Hygienic Preparation</h3>
            <p style="color:var(--text-muted);">Clean and responsible food preparation.</p>
        </div>
        <div class="why-item">
            <h3 style="color:var(--primary-maroon);">Freshness First</h3>
            <p style="color:var(--text-muted);">Packaging designed to maintain product quality.</p>
        </div>
        <div class="why-item" style="grid-column: 1 / -1; text-align: center;">
            <h3 style="color:var(--primary-maroon);">Made for Every Occasion</h3>
            <p style="color:var(--text-muted); max-width:600px; margin:0 auto;">Perfect for everyday snacks, family gatherings, festivals and celebrations.</p>
        </div>
    </div>
</section>

{{-- ============ CUSTOMER REVIEWS (NEW SECTION) ============ --}}
<section class="section">
    <div class="section__head">
        <span class="eyebrow">अभिप्राय</span>
        <h2>What Our Family Says</h2>
    </div>
    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:2rem;">
        <div style="background:#fff; padding:2rem; border-radius:var(--radius-lg); box-shadow:var(--shadow-soft); border-left: 4px solid var(--primary-gold);">
            <div style="color:var(--primary-gold); margin-bottom:1rem;">★★★★★</div>
            <p style="font-style:italic; color:var(--text-muted); margin-bottom:1.5rem;">"The Sev and Bhujia remind me of my childhood. Absolutely fresh and the packaging is fantastic. Highly recommend Sudama Farsan!"</p>
            <h4 style="margin:0; color:var(--text-dark);">— Rajesh D., Maharashtra</h4>
        </div>
        <div style="background:#fff; padding:2rem; border-radius:var(--radius-lg); box-shadow:var(--shadow-soft); border-left: 4px solid var(--primary-gold);">
            <div style="color:var(--primary-gold); margin-bottom:1rem;">★★★★★</div>
            <p style="font-style:italic; color:var(--text-muted); margin-bottom:1.5rem;">"We ordered in bulk for a family wedding, and everyone loved the Chivda. The WhatsApp ordering process was incredibly smooth."</p>
            <h4 style="margin:0; color:var(--text-dark);">— Priya M., Pune</h4>
        </div>
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
        @foreach(['Diwali', 'Family Gatherings', 'Weddings', 'Festivals', 'Office Events', 'Parties'] as $occ)
        <div class="occasion-item">{{ $occ }}</div>
        @endforeach
    </div>
    <div class="occasion__cta">
        <a href="{{ route('contact') }}" class="btn btn--outline">Order for Your Occasion</a>
    </div>
</section>

{{-- ============ BULK ORDERS ============ --}}
<section class="section" style="padding-top:0;">
    <div class="bulk" id="bulk-orders">
        <div class="bulk__copy">
            <span class="eyebrow" style="color:var(--gold-light);">B2B & Wholesale</span>
            <h2>Planning a Bigger Celebration?</h2>
            <p>Special pricing and ordering support for retailers, distributors, events, weddings, offices, hotels and bulk requirements.</p>
            <div class="hero__actions" style="justify-content:center; margin-top:2rem;">
                <a href="https://wa.me/{{ $globalSetting->brand_whatsapp }}" class="btn btn--gold">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.1-1.7-.9-2-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.1-.2.2-.3.2-.6.1-.3-.1-1.2-.5-2.3-1.5-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6.1-.1.3-.3.4-.5.1-.1.2-.3.3-.5.1-.2 0-.4 0-.5C10 9 9.4 7.6 9.1 7c-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.2.3-.9.9-.9 2.1 0 1.2.9 2.4 1 2.6.1.2 1.8 2.7 4.3 3.8.6.3 1.1.4 1.4.5.6.2 1.2.2 1.6.1.5-.1 1.7-.7 1.9-1.3.2-.6.2-1.1.2-1.2-.1-.2-.3-.2-.6-.4z"/><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm0 18.2c-1.6 0-3.2-.4-4.5-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2z"/></svg>
                    WhatsApp for Bulk Orders
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
