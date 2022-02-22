<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('posts', [
        'posts' => Post::latest('published_at')->get(),
        'categories' => Category::all()
    ]);
})->name('home');

Route::get('posts/{post:slug}', fn(Post $post) => view('post', [
    'post' => $post
]));

Route::get('categories/{category:slug}', fn(Category $category) => view('posts', [
    'posts' => $category->posts,
    'currentCategory'=> $category,
    'categories' => Category::all()
]));

Route::get('authors/{author:username}', fn(User $author) => view('posts', [
    'posts' => $author->posts,
    'categories' => Category::all()
]));
