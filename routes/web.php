<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

Route::get('/', function () {
    // To test SQL work
    // DB::listen(function ($query)  {
    //    logger($query->sql); 
    // });
    // select Min SQL to run 
    return view('posts', ["posts" => Post::latest()->get() ]);
});



Route::get('/post/{post:slug}', function (Post $post) {
    //Simple way to Run view 
    // return view("post", ["posts" => Post::findOrFail($id)]);
    // By use modiling 
    return view("post", ["post" => $post]);
});
// })->whereAlphaNumeric("post");

Route::get('/category/{category:slug}', function (Category $category) {

    return view("posts", ["posts" => $category->posts]);
});
Route::get('/authors/{author:user_name}', function (User $author) {

    return view("posts", ["posts" => $author->posts]);
});
