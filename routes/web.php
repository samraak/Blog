<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;

Route::get('/', function () {
    return view('welcome');
});

// Correct routes using GET for index and create
Route::get('/posts', [BlogPostController::class, 'index'])->name('post.index'); // Should be GET
Route::get('/posts/create', [BlogPostController::class, 'create'])->name('post.create'); // Should be GET

// Store route using POST
Route::post('/store', [BlogPostController::class, 'store'])->name('store'); // Should be POST


