<div class="rangoli-divider" aria-hidden="true" style="text-align: center; margin: 3rem 0; opacity: 0.7;">
    <svg viewBox="0 0 200 20" preserveAspectRatio="none" style="width: 100%; max-width: 300px; height: 20px;">
        <path d="M0 10 Q 50 0, 100 10 T 200 10" fill="none" stroke="var(--primary-gold)" stroke-width="1.5"/>
        <circle cx="100" cy="10" r="3" fill="var(--primary-maroon)" />
    </svg>
</div>

<footer class="site-footer" style="background: var(--text-dark); color: #fff; padding: 5rem 2rem 2rem; font-family: var(--font-body);">
    <div class="site-footer__top" style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 3rem; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 3rem; margin-bottom: 2rem;">
        
        <div class="site-footer__brand">
            <span class="site-footer__logo" style="font-family: var(--font-marathi); font-size: 2.5rem; color: var(--gold-light); display: block; margin-bottom: 0.5rem;">सुदामा फरसाण</span>
            <p class="site-footer__tagline" style="color: #aaa; font-size: 1rem; margin-bottom: 1.5rem;">खमंग चव, खास तुमच्यासाठी!</p>
            
            <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 1rem; font-family: var(--font-body);">Join the Family</h4>
            <div style="display: flex; gap: 0.5rem;">
                <input type="email" placeholder="Email Address" style="padding: 0.8rem; border-radius: 4px; border: none; flex: 1; outline: none;">
                <button class="btn btn--gold" style="border-radius: 4px; padding: 0.8rem 1.2rem;">Subscribe</button>
            </div>
        </div>

        <div class="site-footer__col">
            <h4 style="color: var(--gold-light); font-size: 1.2rem; margin-bottom: 1.5rem; font-family: var(--font-display);">Quick Links</h4>
            <div style="display: flex; flex-direction: column; gap: 0.8rem;">
                <a href="{{ route('home') }}" style="color: #ccc; text-decoration: none; transition: color 0.3s;">Home</a>
                <a href="{{ route('shop') }}" style="color: #ccc; text-decoration: none; transition: color 0.3s;">Shop Namkeen</a>
                <a href="{{ route('contact') }}" style="color: #ccc; text-decoration: none; transition: color 0.3s;">Contact Us</a>
                <a href="{{ route('home') }}#bulk-orders" style="color: #ccc; text-decoration: none; transition: color 0.3s;">Bulk Orders</a>
            </div>
        </div>

        <div class="site-footer__col">
            <h4 style="color: var(--gold-light); font-size: 1.2rem; margin-bottom: 1.5rem; font-family: var(--font-display);">Visit Us</h4>
            <p style="color: #ccc; line-height: 1.6; margin-bottom: 1.5rem;">Guru Krupa House, Sardar Patel Chowk,<br>Pariwardha, Taluka Shahada,<br>District Nandurbar, Maharashtra, India</p>
            
            <div class="site-footer__social" style="display: flex; gap: 1rem;">
                <!-- Modern Social Icons -->
                <a href="#" aria-label="Instagram" style="width:40px; height:40px; border-radius:50%; background:rgba(255,255,255,0.1); display:flex; align-items:center; justify-content:center; color:#fff; text-decoration:none; transition:var(--transition);"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                <a href="#" aria-label="Facebook" style="width:40px; height:40px; border-radius:50%; background:rgba(255,255,255,0.1); display:flex; align-items:center; justify-content:center; color:#fff; text-decoration:none; transition:var(--transition);"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                <a href="#" aria-label="WhatsApp" style="width:40px; height:40px; border-radius:50%; background:rgba(255,255,255,0.1); display:flex; align-items:center; justify-content:center; color:#fff; text-decoration:none; transition:var(--transition);"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></a>
            </div>
            <style>.site-footer__social a:hover { background: var(--primary-gold) !important; transform: translateY(-3px); }</style>
        </div>
    </div>

    <div class="site-footer__bottom" style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; color: #888; font-size: 0.9rem;">
        <p style="margin: 0;">&copy; {{ date('Y') }} Sudama Farsan. All rights reserved.</p>
        <p class="site-footer__fssai" style="margin: 0; background: rgba(255,255,255,0.05); padding: 0.3rem 0.8rem; border-radius: 20px;">FSSAI Lic. No. XXXXXXXXXXXXXX</p>
    </div>
</footer>
