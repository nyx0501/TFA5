# Simple POS (Laravel) — IT0049 TFA5

A Laravel rebuild of the TFA1 POS application. It has four pages, and the two account pages use a static PHP array as a temporary data source.

| URL          | Controller method          | View                                  |
|--------------|----------------------------|---------------------------------------|
| `/`          | `PageController@home`      | `resources/views/home.blade.php`      |
| `/about`     | `PageController@about`     | `resources/views/about.blade.php`     |
| `/customers` | `CustomerController@index` | `resources/views/customers.blade.php` |
| `/users`     | `UserController@index`     | `resources/views/users.blade.php`     |

All pages share `resources/views/layouts/app.blade.php`, which holds the navigation bar.

## Requirements

- PHP 8.3 or newer
- Composer

## Setup and run locally

```bash
git clone <your-repo-url> pos-laravel
cd pos-laravel
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Then open http://127.0.0.1:8000.

## Useful Artisan commands

```bash
php artisan route:list          # confirm all four routes exist
php artisan make:controller X   # generate a controller
php artisan about               # inspect the application
```

## Notes

- Customer and user data live in static arrays inside `CustomerController` and `UserController`. They will be replaced by database models, migrations and seeders in a later activity.
- Author: Thomas Cedric M. Smith, Section TB31.
