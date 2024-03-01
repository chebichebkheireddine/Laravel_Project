<?php

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
    return view('posts');
});
Route::get('/post/{post}', function () {
    $path=__DIR__."/../resources/posts/my-first-post.html";
    $post= file_get_contents($path);
    return view ("post",[
        "var"=>$post
    ]);
}); 