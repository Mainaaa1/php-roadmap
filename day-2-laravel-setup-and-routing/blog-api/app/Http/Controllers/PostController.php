<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
{
    $posts = [
        "Intro to Laravel",
        "Understanding Controllers",
        "Blade Templating Basics"
    ];

    return view('posts', compact('posts'));
}

}