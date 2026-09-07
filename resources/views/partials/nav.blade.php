<header class="site-nav" style="position: sticky; top: 0; z-index: 1000; background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-bottom: 1px solid rgba(198, 161, 91, 0.2); transition: var(--transition);">
    <div class="site-nav__inner" style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; padding: 1rem 2rem;">
        
        <a href="{{ route('home') }}" class="site-nav__logo" style="text-decoration: none; display: flex; align-items: center; gap: 0.8rem;">
            <span class="site-nav__logo-mark" style="background: var(--primary-maroon); color: #fff; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-family: var(--font-marathi); font-size: 1.5rem; font-weight: bold;">सु</span>
            <span class="site-nav__logo-text" style="font-family: var(--font-display); font-size: 1.5rem; color: var(--primary-maroon); font-weight: 700; letter-spacing: 1px;">
                SUDAMA <em style="color: var(--primary-gold); font-style: normal;">FARSAN</em>
            </span>
        </a>

        <nav class="site-nav__menu" aria-label="Primary" style="display: flex; gap: 2rem; align-items: center;">
            <style>
                .nav-link { text-decoration: none; color: var(--text-dark); font-weight: 500; font-size: 1rem; transition: color 0.3s; position: relative; }
                .nav-link::after { content: ''; position: absolute; width: 0; height: 2px; bottom: -4px; left: 0; background-color: var(--primary-gold); transition: width 0.3s ease; }
                .nav-link:hover { color: var(--primary-maroon); }
                .nav-link:hover::after { width: 100%; }
                @media(max-width: 768px) { .site-nav__menu { display: none !important; } }
            </style>
            <a href="{{ route('home') }}" class="nav-link">Home</a>
            <a href="{{ route('shop') }}" class="nav-link">Shop</a>
            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
        </nav>

        <div class="site-nav__actions" style="display: flex; align-items: center; gap: 1rem;">
            <a href="https://wa.me/{{ $globalSetting->brand_whatsapp }}" class="btn btn--gold" style="padding: 0.5rem 1.2rem; font-size: 0.9rem;">Order on WhatsApp</a>
        </div>

        <button class="site-nav__hamburger" aria-label="Menu" style="display: none; background: none; border: none; cursor: pointer; flex-direction: column; gap: 5px;">
            <span style="width: 25px; height: 3px; background: var(--primary-maroon); transition: 0.3s;"></span>
            <span style="width: 25px; height: 3px; background: var(--primary-maroon); transition: 0.3s;"></span>
            <span style="width: 25px; height: 3px; background: var(--primary-maroon); transition: 0.3s;"></span>
        </button>
        
        <style>@media(max-width: 768px) { .site-nav__hamburger { display: flex !important; } .site-nav__actions { display: none !important; } }</style>
    </div>

    <!-- Mobile CTA (Visible only on small screens via external CSS, kept minimal here) -->
    <a href="https://wa.me/{{ $globalSetting->brand_whatsapp }}" class="site-nav__mobile-cta" style="display: none; background: var(--primary-gold); color: #fff; text-align: center; padding: 0.8rem; text-decoration: none; font-weight: 500;">Order on WhatsApp</a>
</header>
