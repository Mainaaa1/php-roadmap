# Week 7 — Day 2

# Laravel Setup + Routing

Objective: Install Laravel and understand how routing works in a Laravel application.

---

# Install Laravel

Using Composer:

```bash
composer create-project laravel/laravel blog-api
```

Enter the project:

```bash
cd blog-api
```

Run the server:

```bash
php artisan serve
```

Application will run on:

```
http://127.0.0.1:8000
```

---

# Laravel Project Structure

```
blog-api
 ├── app
 ├── routes
 ├── database
 ├── resources
 ├── public
 └── artisan
```

Important folders:

* **app/** → Application logic
* **routes/** → All application routes
* **database/** → Migrations and seeders
* **resources/views/** → Blade templates

---

# Basic Routing

Routes are defined in:

```
routes/web.php
```

Example:

```php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Welcome to Laravel';
});
```

Open browser:

```
http://127.0.0.1:8000
```

---

# Route with Parameters

```php
Route::get('/user/{name}', function ($name) {
    return "Hello " . $name;
});
```

Example URL:

```
http://127.0.0.1:8000/user/Ian
```

---

# Named Routes

```php
Route::get('/dashboard', function () {
    return 'Dashboard';
})->name('dashboard');
```

---

# API Routes

API routes live in:

```
routes/api.php
```

Example:

```php
Route::get('/posts', function () {
    return ['Post 1', 'Post 2'];
});
```

Endpoint:

```
http://127.0.0.1:8000/api/posts
```

---

# Route List Command

Laravel provides a useful command:

```bash
php artisan route:list
```

This shows all registered routes.

---

# What I Learned

* Laravel setup is quick with Composer
* Routing is clean and expressive
* Web and API routes are separated
* Artisan CLI is powerful

