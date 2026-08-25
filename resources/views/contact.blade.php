@extends('layouts.app')

@section('title', 'Contact — Sudama Farsan')

@section('content')
<section class="section" style="padding-top:3rem; max-width:700px;">
    <div class="section__head">
        <span class="eyebrow">संपर्क</span>
        <h2>Get in Touch</h2>
        <p>Reach us directly — we usually reply fastest on WhatsApp.</p>
    </div>

    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:var(--shadow-soft); text-align:center;">
        <p style="font-family:var(--font-display); font-size:1.3rem; color:var(--maroon); margin-bottom:0.3rem;">Sudama Farsan</p>
        <p style="color:#5A4038; margin-bottom:1.5rem; white-space:pre-line;">{{ $setting->brand_address }}</p>

        <div class="hero__actions" style="justify-content:center;">
            <a href="https://wa.me/{{ $setting->brand_whatsapp }}" class="btn btn--gold">WhatsApp Us</a>
            <a href="tel:{{ $setting->brand_phone }}" class="btn btn--outline">Call Now</a>
        </div>

        <p style="margin-top:1.5rem; color:#8a7369; font-size:0.9rem;">{{ $setting->brand_email }}</p>
    </div>
</section>
@endsection
