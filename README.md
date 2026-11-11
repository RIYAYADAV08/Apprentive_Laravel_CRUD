# 🛍️ ProductHub — Laravel CRUD Application

A clean and beginner-friendly **Laravel 12 CRUD application** for managing products. It demonstrates the core Laravel concepts: **MVC architecture, resource routing, Eloquent ORM, form validation, Blade templating, pagination and SQLite**.

---

## 📌 Project Overview

ProductHub lets users create, view, update and delete products through a simple web interface. The project follows the MVC pattern and uses Laravel's resource controller to keep the code organized, readable and easy to extend.

---

## ✨ Features

- Create a new product
- View all products in a paginated list
- View details of a single product
- Update an existing product
- Delete a product
- Server-side form validation with error messages
- Reusable Blade layout and shared form partial
- Lightweight SQLite database (no extra setup required)

---

## 🛠️ Tech Stack

| Technology | Purpose |
|------------|---------|
| PHP 8.2+ | Programming language |
| Laravel 12 | Backend framework |
| Eloquent ORM | Database interaction |
| Blade | Templating engine |
| SQLite | Database |
| Composer | Dependency management |

---

## 🗄️ Database Schema

**Table: `products`**

| Column | Type | Notes |
|--------|------|-------|
| `id` | BIGINT | Primary key |
| `name` | VARCHAR(255) | Required, max 100 characters |
| `description` | TEXT | Optional |
| `price` | DECIMAL(10,2) | Required, minimum 0 |
| `quantity` | UNSIGNED INTEGER | Required, default 0 |
| `created_at` / `updated_at` | TIMESTAMP | Managed by Eloquent |

---

## 🔗 Routes

Defined using `Route::resource('products', ProductController::class)`.

| Method | URL | Action | Description |
|--------|-----|--------|-------------|
| GET | `/products` | index | List all products |
| GET | `/products/create` | create | Show create form |
| POST | `/products` | store | Save a new product |
| GET | `/products/{product}` | show | View a product |
| GET | `/products/{product}/edit` | edit | Show edit form |
| PUT/PATCH | `/products/{product}` | update | Update a product |
| DELETE | `/products/{product}` | destroy | Delete a product |

The home route `/` redirects to the products list.

---

## 📂 Project Structure

```text
apprentive_laravel_crud/
├── app/
│   ├── Http/Controllers/ProductController.php
│   └── Models/Product.php
├── database/
│   ├── migrations/2026_08_17_000000_create_products_table.php
│   └── database.sqlite
├── resources/views/
│   ├── layout.blade.php
│   └── products/
│       ├── index.blade.php
│       ├── create.blade.php
│       ├── edit.blade.php
│       ├── show.blade.php
│       └── form.blade.php
└── routes/web.php
```

---

## ⚙️ Getting Started

### Prerequisites

- PHP 8.2 or higher
- Composer

### Installation

```bash
# 1. Clone the repository
git clone https://github.com/<your-username>/Apprentive_Laravel_CRUD.git
cd Apprentive_Laravel_CRUD/apprentive_laravel_crud

# 2. Install dependencies
composer install

# 3. Create the environment file
cp .env.example .env

# 4. Generate the application key
php artisan key:generate

# 5. Make sure the SQLite database file exists
touch database/database.sqlite

# 6. Run migrations
php artisan migrate

# 7. Start the development server
php artisan serve


## ✅ Validation Rules

| Field | Rules |
|-------|-------|
| `name` | required, string, max 100 |
| `description` | optional |
| `price` | required, numeric, min 0 |
| `quantity` | required, integer, min 0 |

---

## 🎯 Learning Outcomes

- Understanding the MVC architecture in Laravel
- Using resource controllers and resource routing
- Working with Eloquent ORM and migrations
- Implementing server-side validation
- Building reusable views with Blade layouts and partials
- Implementing pagination

---

## 🚀 Future Improvements

- Search and filter products
- Product image upload
- User authentication
- Categories for products
- REST API with JSON responses

---

## 👩‍💻 Author

**Riya Yadav**

🔗 [LinkedIn](https://www.linkedin.com/in/riyayadav0803/)

---
