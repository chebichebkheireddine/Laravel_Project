<?php

use App\Models\Post;
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
    
    return view('posts',["posts"=>Post::all()]);
});
Route::get('/post/{post}', function ($id) {
    // call simple
    $post=Post::findOrFail($id);
    #call Post pass value from html 
    return view("post",["posts"=>$post]);
}); 
// })->whereAlphaNumeric("post");

