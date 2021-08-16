<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    /* debug Log sql and bindings --> logs save in Storage->logs->laravel.log*/
    /*\Illuminate\Support\Facades\DB::listen(function ($query){
        logger($query->sql,$query->bindings);
    });*/

    return view('posts',
        [
            'posts' => Post::query()->latest()->get(),
            'categories' => Category::all()
        ]);
})->name('home');

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post',
        [
            'post' => $post

        ]
    );
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts',
        [
            'posts' => $category->posts,
            'currentCategory' => $category,
            'categories' => Category::all()
        ]);
})->name('category');

Route::get('/author/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
});

// Test Routs
Route::get('/test/', function () {
    return view('test',
        [
            'posts' => Post::query()->without('category')->latest()->get()
        ]
    );
});

Route::get('auther/{author:username}', function (User $author) {
    return view('test', [
        'posts' => $author->posts
    ]);
});
