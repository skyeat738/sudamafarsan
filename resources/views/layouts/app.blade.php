<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sudama Farsan — खमंग चव, खास तुमच्यासाठी!')</title>
    <meta name="description" content="@yield('meta_description', 'Sudama Farsan brings authentic, premium Indian namkeen — sev, bhujia, gathiya, chivda and more — crafted with tradition and hygienic care. Order online today.')">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Fonts: Cormorant Garamond (display) + Noto Serif Devanagari (Marathi) + Poppins (body) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Noto+Serif+Devanagari:wght@500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('head')
</head>
<body>
    @include('partials.nav')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.whatsapp-float')

    @stack('scripts')
</body>
</html>
