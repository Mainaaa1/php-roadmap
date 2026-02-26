<?php

namespace App\Http\Controllers;

abstract class Controller
{
    use App\Models\Post;

public function index()
{
    $posts = Post::all();
    return view('posts', compact('posts'));
}
}
