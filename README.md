# Sudama Farsan — Website + Admin Panel

This is a complete, self-contained Laravel project. No need to create a
separate Laravel skeleton — just install dependencies and configure `.env`.

## Setup (Hostinger / any server, or local)

```bash
composer install --no-dev --optimize-autoloader
cp .env.example .env
php artisan key:generate
```

Edit `.env` — set your real `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`, and `APP_URL`.

```bash
php artisan migrate --seed
php artisan storage:link
php artisan config:cache
```

On Hostinger, point your domain's document root to the `public/` folder
(this is usually set in hPanel → Websites → your domain → Document Root).

## Admin panel login

- URL: `/admin`
- Email: `admin@sudamafarsan.com`
- Password: `Z7q6djfaVhUP`

**Change this password after your first login.** Anyone with this password can
add/edit/delete products and site content.

## What the admin panel can do
- Add / edit / delete products (name, Marathi name, category, price, MRP, pack size, stock status, featured toggle, product photo upload)
- Add / edit / delete categories
- **Site Content** page — edit About Us / Our Story text, and Contact details (WhatsApp number, phone, email, address) — used everywhere on the site
- Dashboard with quick stats

## Public site
- **Home** (`/`) — hero, trust strip, featured products, categories, brand story, why-us, packaging, festival section, bulk-order CTA
- **Shop** (`/shop`) — all products, WhatsApp order button on each
- **Contact** (`/contact`) — address, WhatsApp, call

No cart, login, or payment gateway on the public site — every order goes through WhatsApp.

## Troubleshooting
- **500 error after login / anywhere**: check `storage/logs/laravel.log` for the
  real error. Common causes: `.env` missing `APP_KEY` (run `php artisan key:generate`),
  wrong DB credentials, or `storage/` and `bootstrap/cache/` not writable
  (`chmod -R 775 storage bootstrap/cache`).
- **"Invalid credentials" on admin login**: means `php artisan migrate --seed`
  didn't run the seeders. Run `php artisan db:seed` separately and check for errors.
- **Product images not showing**: run `php artisan storage:link` once.
