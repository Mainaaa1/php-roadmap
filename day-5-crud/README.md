# Week 7 — Day 5

# Laravel CRUD

Objective: Implement full CRUD (Create, Read, Update, Delete) functionality using Laravel, Eloquent, Controllers, and Blade views.

---

# CRUD Overview

CRUD operations:

* Create → Add new post
* Read → View posts
* Update → Edit post
* Delete → Remove post

We will use the `Post` model created on Day 4.

---

# Resource Controller

Laravel can generate a full CRUD controller:

```bash
php artisan make:controller PostController --resource
```

This generates methods:

* index()
* create()
* store()
* show()
* edit()
* update()
* destroy()

---

# Resource Route

In:

```
routes/web.php
```

```php
use App\Http\Controllers\PostController;

Route::resource('posts', PostController::class);
```

Check routes:

```bash
php artisan route:list
```

---

# Read (Index)

```php
public function index()
{
    $posts = Post::all();
    return view('posts.index', compact('posts'));
}
```

---

# Create (Form)

```php
public function create()
{
    return view('posts.create');
}
```

Form example (`resources/views/posts/create.blade.php`):

```html
<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <textarea name="content" placeholder="Content"></textarea>
    <button type="submit">Save</button>
</form>
```

---

# Store (Insert into DB)

```php
public function store(Request $request)
{
    Post::create($request->only(['title', 'content']));
    return redirect()->route('posts.index');
}
```

---

# Edit (Show Edit Form)

```php
public function edit(Post $post)
{
    return view('posts.edit', compact('post'));
}
```

---

# Update

```php
public function update(Request $request, Post $post)
{
    $post->update($request->only(['title', 'content']));
    return redirect()->route('posts.index');
}
```

---

# Delete

```php
public function destroy(Post $post)
{
    $post->delete();
    return redirect()->route('posts.index');
}
```

Delete button example:

```html
<form method="POST" action="{{ route('posts.destroy', $post->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
```

---

# Blade Folder Structure

```
resources/views/posts/
 ├── index.blade.php
 ├── create.blade.php
 ├── edit.blade.php
```

---

# Key Concepts Practiced

* Resource controllers
* Route model binding
* Form handling
* CSRF protection
* Redirects
* Eloquent create/update/delete

---

# Common Improvements

To make this production-ready:

* Add request validation
* Add pagination
* Use form request classes
* Add flash success messages
* Add authentication

---

# What I Learned

* Laravel makes CRUD extremely fast to implement
* Route model binding reduces boilerplate
* Blade integrates cleanly with backend logic
* Resource controllers enforce consistent structure

** The changes will be done on the blog api in day 2 folder **