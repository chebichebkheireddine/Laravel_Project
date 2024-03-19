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
    $post=Post::latest();
    // search code 
    if (request("search")) {
        $post->where("title","like","%".request("search")."%")
        ->where("body","like","%".request("search")."%"); 
    }
    return view('posts', [
        "posts" => $post->get(),
        "categorise"=>Category::all(),
    ]);
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
