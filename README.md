# USM PANTAS — Library Management System

Laravel application for cataloging, circulation, patron registration, attendance scanning, room reservations, e-resources, and staff administration.

**Repository:** [github.com/borskenetic/usm](https://github.com/borskenetic/usm)

## Requirements

- PHP 8.2+
- Composer
- MySQL 8+ (or MariaDB)
- Node.js (optional, if you build front-end assets with Vite)

## Quick start (local)

```bash
composer install
cp .env.example .env
php artisan key:generate
cp public/branding/branding.css.example public/branding/branding.css
```

Create a MySQL database (example name `demo_2`), then set in `.env`:

```env
APP_URL=http://localhost
DB_DATABASE=demo_2
DB_USERNAME=root
DB_PASSWORD=
```

Run migrations and seed MARC catalog framework:

```bash
php artisan migrate
php artisan db:seed --class=MarcFrameworkSeeder
php artisan storage:link
```

Optional — 10 sample students for QR/attendance testing (`S-00000001` … `S-00000010`):

```bash
php artisan db:seed --class=StudentSampleSeeder
```

Serve the app:

```bash
php artisan serve
```

Sign in with an **admin** or **staff** user created in the database or via **Create Account** in the admin UI.

## Environment notes

| Variable | Purpose |
|----------|---------|
| `BRANDING_CSS` | Per-school stylesheet under `public/branding/` (see `public/branding/README.md`) |
| `SMS_MODEM_URL` / `SMS_MODEM_API_KEY` | Local Flask SMS bridge (optional) |
| `GOOGLE_BOOKS_API_KEY` | ISBN lookup quota for cataloging (optional) |

Copy `.env.example` — **never commit** your real `.env` file.

`public/branding/branding.css` is gitignored; use `branding.css.example` as the template.

## Pushing to GitHub

Remote is configured as `origin` → `https://github.com/borskenetic/usm.git`.

From the project root:

```bash
git status
git add -A
git commit -m "Initial commit"
git branch -M main
git push -u origin main
```

Before pushing, confirm `git status` does **not** list:

- `.env`
- `public/branding/branding.css`
- Uploads under `public/images/profile_pictures/`, etc.

## Fresh clone on another machine

```bash
git clone https://github.com/borskenetic/usm.git
cd usm
composer install
cp .env.example .env
cp public/branding/branding.css.example public/branding/branding.css
# edit .env for DB credentials
php artisan key:generate
php artisan migrate
php artisan db:seed --class=MarcFrameworkSeeder
php artisan storage:link
```

Ensure writable directories: `storage/`, `bootstrap/cache/`, and upload folders under `public/images/` (see `.gitkeep` files).

**Videos:** MP4 files under `public/videos/` are not stored on GitHub (too large). After cloning, copy your slideshow/background videos into `public/videos/` on the server.

## Main features

- **Catalog** — MARC-based books, programs, circulation, fines, trash/archive
- **E-Resources** — `/ebooks` digital collection with program/subject filters
- **Patrons** — student registration, ID cards, pending approvals
- **Attendance** — QR scan in/out, reports, optional logout feedback
- **Rooms** — reservations, schedule, pending queue, logs
- **Admin** — user accounts (admin/staff/faculty/student roles)

## License

Application code follows your project license. Laravel framework components are [MIT](https://opensource.org/licenses/MIT).
