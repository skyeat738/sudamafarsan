<header class="site-nav">
    <div class="site-nav__inner">
        <a href="{{ route('home') }}" class="site-nav__logo">
            <span class="site-nav__logo-mark">सु</span>
            <span class="site-nav__logo-text">
                SUDAMA <em>FARSAN</em>
            </span>
        </a>

        <nav class="site-nav__menu" aria-label="Primary">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('shop') }}">Shop</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>

        <div class="site-nav__actions">
            <a href="https://wa.me/{{ $globalSetting->brand_whatsapp }}" class="btn btn--gold btn--sm">Order on WhatsApp</a>
        </div>

        <button class="site-nav__hamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </div>

    <a href="https://wa.me/{{ $globalSetting->brand_whatsapp }}" class="site-nav__mobile-cta">Order on WhatsApp</a>
</header>
