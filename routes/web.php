<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('categories/{category:slug}', fn(Category $category) => view('posts', [
    'posts' => $category->posts,
    'currentCategory' => $category,
    'categories' => Category::all()
]));

Route::get('authors/{author:username}', fn(User $author) => view('posts', [
    'posts' => $author->posts,
    'categories' => Category::all()
]));
