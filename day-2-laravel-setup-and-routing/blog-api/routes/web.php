<?php

use App\Http\Controllers\WebPostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', WebPostController::class)
    ->except(['show'])
    ->names('web.posts');
