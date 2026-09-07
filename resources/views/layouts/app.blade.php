<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sudama Farsan — खमंग चव, खास तुमच्यासाठी!')</title>
    <meta name="description" content="@yield('meta_description', 'Sudama Farsan brings authentic, premium Indian namkeen — sev, bhujia, gathiya, chivda and more — crafted with tradition and hygienic care. Order online today.')">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Noto+Serif+Devanagari:wght@500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    {{-- Premium UI Styles Upgrade --}}
    <style>
        :root {
            --primary-maroon: #7A1D1D;
            --primary-gold: #C6A15B;
            --gold-light: #EAD9AE;
            --bg-cream: #FDFBF7;
            --text-dark: #2C1E16;
            --text-muted: #6B5B54;
            --shadow-soft: 0 12px 24px -6px rgba(44, 30, 22, 0.08);
            --shadow-hover: 0 20px 32px -8px rgba(198, 161, 91, 0.25);
            --radius-lg: 16px;
            --radius-md: 12px;
            --font-display: 'Cormorant Garamond', serif;
            --font-body: 'Poppins', sans-serif;
            --font-marathi: 'Noto Serif Devanagari', serif;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        body {
            background-color: var(--bg-cream);
            color: var(--text-dark);
            font-family: var(--font-body);
            margin: 0;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* Typography */
        h1, h2, h3 { font-family: var(--font-display); color: var(--primary-maroon); }
        .eyebrow { 
            font-size: 0.85rem; text-transform: uppercase; letter-spacing: 2px; 
            color: var(--primary-gold); font-weight: 600; display: block; margin-bottom: 0.5rem; 
        }

        /* Buttons */
        .btn {
            display: inline-flex; align-items: center; justify-content: center;
            padding: 0.8rem 1.8rem; border-radius: 50px; font-weight: 500;
            text-decoration: none; transition: var(--transition);
            cursor: pointer; gap: 0.5rem;
        }
        .btn--gold { background: var(--primary-gold); color: #fff; box-shadow: 0 4px 15px rgba(198,161,91,0.3); }
        .btn--gold:hover { background: #b08d4b; transform: translateY(-2px); box-shadow: var(--shadow-hover); }
        .btn--outline { border: 2px solid var(--primary-maroon); color: var(--primary-maroon); background: transparent; }
        .btn--outline:hover { background: var(--primary-maroon); color: #fff; transform: translateY(-2px); }

        /* Sections */
        .section { padding: 5rem 2rem; max-width: 1200px; margin: 0 auto; }
        .section__head { text-align: center; margin-bottom: 3rem; }
        .section__head h2 { font-size: 2.8rem; margin: 0 0 1rem; }
        .section__head p { color: var(--text-muted); font-size: 1.1rem; max-width: 600px; margin: 0 auto; }
        .section--tint { background-color: #F8F4EA; max-width: 100%; padding-left: 2rem; padding-right: 2rem; }

        /* Product Cards */
        .product-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 2rem; max-width: 1200px; margin: 0 auto; }
        .product-card {
            background: #fff; border-radius: var(--radius-lg); overflow: hidden;
            box-shadow: var(--shadow-soft); transition: var(--transition);
            border: 1px solid rgba(198, 161, 91, 0.1);
            display: flex; flex-direction: column;
        }
        .product-card:hover { transform: translateY(-8px); box-shadow: var(--shadow-hover); }
        .product-card__image { height: 240px; background: #f0eae1; position: relative; overflow: hidden; }
        .product-card__image img { transition: transform 0.5s ease; }
        .product-card:hover .product-card__image img { transform: scale(1.08); }
        .product-card__badge { position: absolute; top: 12px; right: 12px; background: var(--primary-maroon); color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.75rem; font-weight: 600; z-index: 2; }
        .product-card__body { padding: 1.5rem; text-align: center; flex-grow: 1; display: flex; flex-direction: column; }
        .product-card h3 { margin: 0; font-size: 1.5rem; }
        .product-card__marathi { font-family: var(--font-marathi); color: var(--primary-gold); margin: 0.2rem 0 1rem; font-size: 1.1rem; }
        .product-card__meta { font-size: 0.85rem; color: var(--text-muted); background: var(--bg-cream); display: inline-block; padding: 0.2rem 0.8rem; border-radius: 20px; margin: 0 auto 1rem; }
        .product-card__price { font-size: 1.4rem; font-weight: 600; color: var(--text-dark); margin-bottom: 1.5rem; }
        .product-card__price span { text-decoration: line-through; color: #a99d96; font-size: 1rem; font-weight: 400; margin-left: 0.5rem; }
        .product-card .btn { margin-top: auto; }

        /* Trust Strip */
        .trust-strip { background: var(--primary-maroon); color: #fff; padding: 3rem 1rem; }
        .trust-strip__inner { display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem; max-width: 1200px; margin: 0 auto; }
        .trust-item { flex: 1 1 180px; text-align: center; padding: 1rem; transition: var(--transition); }
        .trust-item:hover { transform: translateY(-5px); }
        .trust-item svg { width: 48px; height: 48px; stroke: var(--primary-gold); margin-bottom: 1rem; }
        .trust-item h3 { color: var(--gold-light); font-size: 1.2rem; margin-bottom: 0.5rem; font-family: var(--font-body); font-weight: 600; }
        .trust-item p { font-size: 0.85rem; opacity: 0.8; margin: 0; }

        /* Category Grid */
        .category-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; max-width: 1200px; margin: 0 auto; }
        .category-card {
            background: #fff; border-radius: var(--radius-md); padding: 2rem 1rem; text-align: center;
            text-decoration: none; box-shadow: var(--shadow-soft); transition: var(--transition);
            border-bottom: 4px solid transparent;
        }
        .category-card:hover { border-bottom-color: var(--primary-gold); transform: translateY(-5px); }
        .category-card__mr { display: block; font-family: var(--font-marathi); font-size: 1.5rem; color: var(--primary-maroon); margin-bottom: 0.5rem; }
        .category-card__en { display: block; font-size: 0.9rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 1px; }

        /* Story & Why */
        .story { display: flex; flex-wrap: wrap; gap: 4rem; align-items: center; }
        .story__visual, .story__copy { flex: 1 1 400px; }
        .story__visual { background: url('https://www.transparenttextures.com/patterns/food.png'), linear-gradient(135deg, var(--primary-maroon), #4a1111); height: 400px; border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center; position: relative; box-shadow: var(--shadow-hover); }
        .story__visual span { font-family: var(--font-marathi); font-size: 5rem; color: rgba(255,255,255,0.1); font-weight: bold; }
        
        .why-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; }
        .why-item { background: #fff; padding: 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-soft); position: relative; overflow: hidden; z-index: 1;}
        .why-item::before { content: ''; position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: var(--primary-gold); z-index: -1; transition: width 0.3s ease; }
        .why-item:hover::before { width: 100%; opacity: 0.05; }
        .why-item h3 { margin-top: 0; font-size: 1.3rem; }

        /* Occasions */
        .occasion-grid { display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem; margin-bottom: 3rem; }
        .occasion-item { background: #fff; border: 1px solid var(--primary-gold); color: var(--primary-maroon); padding: 0.8rem 1.5rem; border-radius: 50px; font-weight: 500; font-size: 1.1rem; box-shadow: var(--shadow-soft); transition: var(--transition); cursor: default; }
        .occasion-item:hover { background: var(--primary-gold); color: #fff; transform: scale(1.05); }
        .occasion__cta { text-align: center; }

        /* Bulk & Special */
        .bulk { background: linear-gradient(rgba(122, 29, 29, 0.95), rgba(122, 29, 29, 0.95)), url('https://www.transparenttextures.com/patterns/stardust.png'); color: white; text-align: center; border-radius: var(--radius-lg); padding: 4rem 2rem; margin-top: 2rem; margin-bottom: 2rem;}
        .bulk h2 { color: var(--gold-light); font-size: 2.5rem; }
        .bulk p { color: #f0eae1; font-size: 1.1rem; max-width: 700px; margin: 0 auto 2rem; }
        
        @media(max-width: 768px) {
            .section__head h2 { font-size: 2rem; }
            .story { gap: 2rem; }
        }
    </style>
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
