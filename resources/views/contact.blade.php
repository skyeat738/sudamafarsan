@extends('layouts.app')
@section('title', 'Contact — Sudama Farsan')
@section('content')

<section class="section" style="padding-top:6rem; max-width:800px; min-height: 80vh;">
    <div class="section__head">
        <span class="eyebrow">संपर्क</span>
        <h1 style="font-size: 3rem; margin-bottom:1rem;">Get in Touch</h1>
        <p>Reach us directly for retail orders, bulk inquiries, or distribution partnerships. We usually reply fastest on WhatsApp.</p>
    </div>

    <div style="background: #fff; border-radius: var(--radius-lg); padding: 3rem; box-shadow: var(--shadow-soft); text-align: center; border-top: 6px solid var(--primary-maroon); position: relative; overflow: hidden;">
        
        <!-- Decorative bg -->
        <div style="position:absolute; top:-50px; right:-50px; width:150px; height:150px; background:var(--gold-light); border-radius:50%; opacity:0.3; z-index:0;"></div>
        
        <div style="position:relative; z-index:1;">
            <p style="font-family:var(--font-display); font-size:2.2rem; color:var(--primary-maroon); margin-bottom:0.5rem; font-weight:bold;">Sudama Farsan</p>
            
            <div style="display:flex; align-items:center; justify-content:center; gap:0.5rem; color:var(--text-muted); margin-bottom: 2rem;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                <span style="white-space:pre-line; font-size:1.1rem;">{{ $setting->brand_address }}</span>
            </div>

            <div style="display: flex; gap: 1.5rem; justify-content: center; flex-wrap: wrap; margin-bottom: 2rem;">
                <a href="https://wa.me/{{ $setting->brand_whatsapp }}" class="btn btn--gold">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.1-1.7-.9-2-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.1-.2.2-.3.2-.6.1-.3-.1-1.2-.5-2.3-1.5-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6.1-.1.3-.3.4-.5.1-.1.2-.3.3-.5.1-.2 0-.4 0-.5C10 9 9.4 7.6 9.1 7c-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.2.3-.9.9-.9 2.1 0 1.2.9 2.4 1 2.6.1.2 1.8 2.7 4.3 3.8.6.3 1.1.4 1.4.5.6.2 1.2.2 1.6.1.5-.1 1.7-.7 1.9-1.3.2-.6.2-1.1.2-1.2-.1-.2-.3-.2-.6-.4z"/><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm0 18.2c-1.6 0-3.2-.4-4.5-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2z"/></svg>
                    WhatsApp Us
                </a>
                <a href="tel:{{ $setting->brand_phone }}" class="btn btn--outline">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    Call Now
                </a>
            </div>

            <div style="border-top: 1px solid #eaeaea; padding-top: 1.5rem; display: flex; align-items: center; justify-content: center; gap: 0.5rem; color: var(--text-muted);">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                <a href="mailto:{{ $setting->brand_email }}" style="color:var(--text-muted); text-decoration:none;">{{ $setting->brand_email }}</a>
            </div>
            
            <div style="margin-top: 1rem; color: var(--primary-gold); font-size: 0.9rem; font-weight: 500;">
                Operating Hours: Monday - Saturday (9:00 AM - 8:00 PM)
            </div>
        </div>
    </div>
</section>

@endsection
