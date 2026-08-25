# Sudama Farsan — Website + Admin Panel

## First-time setup

This project ships the app code (routes, controllers, models, views, migrations).
Since it wasn't generated via the Laravel installer, start by creating a fresh
Laravel skeleton and then copy these files into it — this gives you the standard
config/ files (app.php, filesystems.php, database.php, etc.) that Laravel needs.

```bash
composer create-project laravel/laravel sudama-farsan-app
```

Then copy `app/`, `database/`, `resources/`, `routes/web.php`, `public/css/`,
`config/auth.php`, and `bootstrap/app.php` from this delivered project into the
new `sudama-farsan-app` folder (overwrite the defaults).

```bash
cd sudama-farsan-app
cp .env.example .env
php artisan key:generate
# set your DB credentials in .env, then:
php artisan migrate --seed
php artisan storage:link
php artisan serve
```

Open http://localhost:8000 for the website, and http://localhost:8000/admin for the admin panel.

## Admin panel login

- URL: `/admin`
- Email: `admin@sudamafarsan.com`
- Password: `Z7q6djfaVhUP`

**Change this password after your first login** (or edit `database/seeders/AdminSeeder.php`
before seeding, and re-seed). Anyone with this password can add/edit/delete products.

## What the admin panel can do
- Add / edit / delete products (name, Marathi name, category, price, MRP, pack size, stock status, featured toggle, product photo upload)
- Add / edit / delete categories
- **Site Content** page — edit the About Us / Our Story text (shown on homepage) and Contact details (WhatsApp number, phone, email, address) used everywhere on the site: footer, Contact page, nav "Order on WhatsApp" button, floating WhatsApp button, and every product's WhatsApp order message
- Dashboard with quick stats (total products, categories, in-stock/out-of-stock counts)

Everything editable from the admin panel updates live on the public site immediately —
no code change or redeploy needed for product, category, or content edits.

Product photos you upload here automatically appear on the Home and Shop pages,
replacing the placeholder boxes.

## Public site
- **Home** (`/`) — hero, trust strip, featured products, categories, brand story, why-us, packaging, festival section, bulk-order CTA
- **Shop** (`/shop`) — all products, WhatsApp order button on each
- **Contact** (`/contact`) — address, WhatsApp, call

No cart, login, or payment gateway on the public site — every order goes through WhatsApp.

## Editable settings
`BRAND_WHATSAPP_NUMBER`, `BRAND_PHONE_NUMBER`, `BRAND_EMAIL`, `BRAND_ADDRESS` in `.env`.
