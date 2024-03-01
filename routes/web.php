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

Route::get('/yaml', function () {

    // $posts=Post::all();
    $files=File::files(resource_path("posts") );
    ddd($files);
    foreach($files as $file){

        $document= YamlFrontMatter::parseFile($file);
    
        $posts[]=new Post($document->slug,$document->title,$document->date,$document->subPar,$document->body());
    }
    // ddd($posts);
    return view("posts",["posts"=>$posts]);
});
Route::get('/', function () {
    $post=Post::all();

    return view('posts',["posts"=>$post]);
});
Route::get('/post/{post}', function ($solg) {
    // Make it with good  way 
    $post=Post::find($solg);#call Post pass value from html 
    return view("post",["post"=>$post]);
})->where("post", "[A-Za-z_\-]+"); 
// })->whereAlphaNumeric("post"); 