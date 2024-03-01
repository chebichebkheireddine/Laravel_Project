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
Route::get('/post/{post}', function ($solg) {
    $path=__DIR__."/../resources/posts/{$solg}.html";
    // protocol to path  if exsist
if (!file_exists($path)) {
    # Do  this
    // dd("file is not here");
    #this file is not here
    abort(404);
    // return redirect("/");
}

    $post= file_get_contents($path);
    return view ("post",[
        "var"=>$post
    ]);
}); 