<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [BlogPostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [BlogPostController::class, 'create'])->name('posts.create');
Route::post('/posts', [BlogPostController::class, 'store'])->name('posts.store');



