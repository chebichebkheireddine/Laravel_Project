<?php

use App\Http\Controllers\PostController;
// use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;


// use App\Models\Post;

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

Route::get('/', [PostController::class, "index"])->name("posts");



Route::get('/post/{post:slug}', [PostController::class, "show"]);
// // })->whereAlphaNumeric("post");

// Route::get('/category/{category:slug}', function (Category $category) {

//     return view("posts", [
//         "posts" => $category->posts,
//         "curentCategory" => $category,
//         "categorise" => Category::all()
//     ]);
// });
Route::get('/authors/{author:user_name}', function (User $author) {

    return view("posts", [
        "posts" => $author->posts,
    ]);
});
