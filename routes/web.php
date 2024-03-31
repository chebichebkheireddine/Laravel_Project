<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutControler;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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
Route::get("register", [RegisterController::class, "create"])->middleware("guest");
Route::post("register", [RegisterController::class, "store"])->middleware("guest");
// Logout
Route::post("logout", [SessionController::class, "distroy"])->middleware("auth");
// login must be guest
Route::get("login", [SessionController::class, "create"])->middleware("guest");
Route::post("login", [SessionController::class, "store"])->middleware("guest");

// Route for post comment
// make comun convestion
Route::post("/posts/{post:slug}/comments", [CommentController::class, "store"])->middleware("auth");











































































































#This is all commrnter  code
// // })->whereAlphaNumeric("post");

// Route::get('/category/{category:slug}', function (Category $category) {

//     return view("posts", [
//         "posts" => $category->posts,
//         "curentCategory" => $category,
//         "categorise" => Category::all()
//     ]);
// });
// Route::get('/authors/{author:user_name}', function (User $author) {

//     return view("posts.index", [
//         "posts" => $author->posts,
//     ]);
// });