<?php

use App\Models\Post;
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
    return view('welcome');
});


Route::get('/posts', function () {
    return view('posts', ['posts' => Post::all()]);
});

/**
 * Find a post by it's slug and return it to "post" view.
 */
Route::get('/posts/{post}', function (Post $post) {
    return view('post', ['post' => $post]);
})->where('post', '[A-z0-9_-]+');
