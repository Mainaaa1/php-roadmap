# Week 7 — Day 4

# Models + Migrations

Objective: Understand how Laravel handles database structure using migrations and interacts with data using Eloquent models.

---

# Database Configuration

Database settings are stored in:

```
.env
```

Example (MySQL):

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_db
DB_USERNAME=root
DB_PASSWORD=
```

After updating the .env file, clear config cache:

```bash
php artisan config:clear
```

---

# Creating a Model with Migration

Laravel allows generating both at once:

```bash
php artisan make:model Post -m
```

This creates:

```
app/Models/Post.php
```

and

```
database/migrations/xxxx_xx_xx_create_posts_table.php
```

---

# Editing the Migration

Open the migration file and define table structure:

```php
public function up(): void
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('content');
        $table->timestamps();
    });
}
```

---

# Running Migrations

```bash
php artisan migrate
```

This creates the table in the database.

---

# Eloquent Model

Open:

```
app/Models/Post.php
```

Basic model:

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];
}
```

The `$fillable` property protects against mass assignment vulnerabilities.

---

# Using the Model in Controller

Example:

```php
use App\Models\Post;

public function index()
{
    $posts = Post::all();
    return view('posts', compact('posts'));
}
```

Create a post:

```php
Post::create([
    'title' => 'First Post',
    'content' => 'This is the content'
]);
```

---

# Useful Migration Commands

Rollback last migration:

```bash
php artisan migrate:rollback
```

Refresh database:

```bash
php artisan migrate:refresh
```

Reset completely:

```bash
php artisan migrate:fresh
```

---

# How Laravel Handles Migrations

Laravel stores executed migrations inside:

```
migrations table
```

This prevents duplicate execution.

---

# What I Learned

* Migrations version-control the database
* Eloquent simplifies database operations
* `$fillable` protects application security
* Artisan commands streamline workflow

** The changes will be done on the blog api in day 2 folder **