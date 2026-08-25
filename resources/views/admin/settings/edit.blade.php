@extends('admin.layout')
@section('title', 'Site Content')

@section('content')
<h1>Site Content</h1>
<p style="color:#8a7369; margin-top:-0.8rem; margin-bottom:1.2rem; font-size:0.85rem;">
    This controls the About Us / Our Story text on the homepage, and the contact
    details shown on the Contact page, footer, and WhatsApp order buttons site-wide.
</p>

<form method="POST" action="{{ route('admin.settings.update') }}" class="admin-form" style="max-width:700px;">
    @csrf
    @method('PUT')

    <label>About Us / Our Story text</label>
    <textarea name="about_us" rows="5">{{ old('about_us', $setting->about_us) }}</textarea>

    <div class="admin-form__row" style="grid-template-columns: 1fr 1fr;">
        <div>
            <label>WhatsApp Number (with country code, no + or spaces)</label>
            <input type="text" name="brand_whatsapp" value="{{ old('brand_whatsapp', $setting->brand_whatsapp) }}" placeholder="919999999999">
        </div>
        <div>
            <label>Phone Number</label>
            <input type="text" name="brand_phone" value="{{ old('brand_phone', $setting->brand_phone) }}" placeholder="+919999999999">
        </div>
    </div>

    <label>Email</label>
    <input type="text" name="brand_email" value="{{ old('brand_email', $setting->brand_email) }}">

    <label>Address</label>
    <textarea name="brand_address" rows="3">{{ old('brand_address', $setting->brand_address) }}</textarea>

    <div class="admin-form__actions">
        <button type="submit" class="admin-btn admin-btn--primary">Save Changes</button>
    </div>
</form>
@endsection
