# Week 7 — Day 3

# Controllers + Views

Objective: Understand how Laravel separates logic (Controllers) from presentation (Views) using Blade templating.

---

# Creating a Controller

Laravel provides Artisan to generate controllers.

```bash
php artisan make:controller PostController
```

This creates:

```
app/Http/Controllers/PostController.php
```

---

# Basic Controller Example

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "All Posts";
    }

    public function show($id)
    {
        return "Post ID: " . $id;
    }
}
```

---

# Connecting Controller to Routes

Update:

```
routes/web.php
```

```php
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
```

Now visit:

```
http://127.0.0.1:8000/posts
```

---

# Introduction to Views

Views are stored in:

```
resources/views/
```

Create a file:

```
resources/views/posts.blade.php
```

---

# Basic Blade Template

```html
<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>All Blog Posts</h1>

    <ul>
        @foreach ($posts as $post)
            <li>{{ $post }}</li>
        @endforeach
    </ul>
</body>
</html>
```

---

# Returning a View from Controller

Update controller:

```php
public function index()
{
    $posts = [
        "Intro to Laravel",
        "Understanding Controllers",
        "Blade Templating Basics"
    ];

    return view('posts', compact('posts'));
}
```

Laravel automatically looks inside:

```
resources/views/posts.blade.php
```

---

# Blade Syntax Essentials

Echo variable:

```php
{{ $variable }}
```

Conditionals:

```php
@if($condition)
    <p>Condition is true</p>
@endif
```

Loops:

```php
@foreach($items as $item)
    {{ $item }}
@endforeach
```

---

# MVC Pattern in Laravel

Laravel follows MVC:

Model → Data
View → UI
Controller → Logic

Flow:

```
Route → Controller → View → Browser
```

---

# What I Learned

* Controllers handle business logic
* Views manage presentation
* Blade is clean and readable
* MVC improves maintainability

** The changes will be done on the blog api in day 2 folder **