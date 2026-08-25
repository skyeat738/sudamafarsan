<footer class="site-footer">
    <div class="site-footer__top">
        <div class="site-footer__brand">
            <span class="site-footer__logo">सुदामा फरसाण</span>
            <p class="site-footer__tagline">खमंग चव, खास तुमच्यासाठी!</p>
        </div>

        <div class="site-footer__col">
            <h4>Quick Links</h4>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('shop') }}">Shop</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>

        <div class="site-footer__col">
            <h4>Visit Us</h4>
            <p>Guru Krupa House, Sardar Patel Chowk,<br>Pariwardha, Taluka Shahada,<br>District Nandurbar, Maharashtra, India</p>
            <div class="site-footer__social">
                <a href="#" aria-label="Instagram">IG</a>
                <a href="#" aria-label="Facebook">FB</a>
                <a href="#" aria-label="YouTube">YT</a>
                <a href="#" aria-label="WhatsApp">WA</a>
            </div>
        </div>
    </div>

    <div class="site-footer__bottom">
        <p>&copy; {{ date('Y') }} Sudama Farsan. All rights reserved.</p>
        <p class="site-footer__fssai">FSSAI Lic. No. XXXXXXXXXXXXXX</p>
    </div>
</footer>
