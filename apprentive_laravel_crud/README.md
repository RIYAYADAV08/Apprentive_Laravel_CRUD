# ProductHub — Laravel CRUD

A simple ready-to-run CRUD application built for a Laravel selection task. It demonstrates MVC, routing, Eloquent ORM, validation, resource controllers, Blade views, pagination, and SQLite.

## Requirements
- PHP 8.2+
- Composer

## Setup
1. `composer install`
2. Copy `.env.example` to `.env`
3. `php artisan key:generate`
4. Make sure `database/database.sqlite` exists (included).
5. `php artisan migrate`
6. `php artisan serve`
7. Open `http://127.0.0.1:8000`

## CRUD
- Create a product
- Read/list and view a product
- Update a product
- Delete a product

## Architecture
- Model: `app/Models/Product.php`
- Controller: `app/Http/Controllers/ProductController.php`
- Routes: `routes/web.php`
- Migration: `database/migrations/2026_08_17_000000_create_products_table.php`
- Views: `resources/views/products/`

## Selection Task
The project is intentionally small and easy to explain in an interview. It uses Laravel Resource Routing and Eloquent ORM with a SQLite database.
