# Week 7 - Day 5 Reflection

Today I implemented full CRUD for my Laravel blog project and connected both web and API flows to the same `posts` table.

## What I built

I made two working CRUD paths inside:

`php-roadmap/day-2-laravel-setup-and-routing/blog-api`

1. Web CRUD using Blade at `/posts`
2. API CRUD using JSON at `/api/posts`

For the web side, I used a separate `WebPostController` and resource routing so I could create, edit, update, and delete posts in the browser.

For the API side, I kept `PostController` as JSON-only and exposed endpoints through `Route::apiResource('posts', PostController::class)`.

## Files I worked on

1. `routes/web.php` for Blade CRUD routes
2. `routes/api.php` for API routes
3. `app/Http/Controllers/WebPostController.php` for web actions + redirects
4. `app/Http/Controllers/PostController.php` for API responses
5. `resources/views/posts/index.blade.php`
6. `resources/views/posts/create.blade.php`
7. `resources/views/posts/edit.blade.php`

## What I learned

1. Why `/api/posts` works from `routes/api.php` but `/posts` must be defined in `routes/web.php`
2. How resource routes reduce repetitive route writing
3. How route model binding makes update/delete cleaner
4. How to use CSRF and method spoofing (`@method('PUT')`, `@method('DELETE')`) in forms
5. How validation in controllers protects data before saving
6. How one model (`Post`) can serve both web views and API responses

## Problems I ran into

1. I expected `/posts` to work while only API routes existed, which caused a 404
2. I had controller structure issues earlier and learned to keep base controller and feature controllers separate
3. I needed to split responsibilities: one controller for web views, one for API JSON

## Final result

Now I can:

1. Open `http://127.0.0.1:8000/posts` and manage posts with forms
2. Hit `http://127.0.0.1:8000/api/posts` and test CRUD as JSON in Postman

This day helped me understand CRUD end-to-end in Laravel, not just in theory but in a working app with both browser and API usage.
