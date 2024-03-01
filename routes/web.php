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

    
    $files=File::files(resource_path("posts") );
    $posts=collect($files)->map(function ($file){
        $document= YamlFrontMatter::parseFile($file);
       return new Post($document->slug,$document->title,$document->date,$document->subPar,$document->body());
    }
    );
    // $posts=array_map(function($file){
    //     $document= YamlFrontMatter::parseFile($file);
    //    return new Post($document->slug,$document->title,$document->date,$document->subPar,$document->body());    
    // },$files);
    ######
    // ddd($files);
    #code long
    // foreach($files as $file){
        
    //     $document= YamlFrontMatter::parseFile($file);
        
    //     $posts[]=new Post($document->slug,$document->title,$document->date,$document->subPar,$document->body());
    // }
    // ddd($posts);
    // return view("posts",["posts"=>$posts]);
});
Route::get('/', function () {
    $post=Post::all();

    return view('posts',["posts"=>$post]);
});
Route::get('/post/{post}', function ($slug) {
    // call simple
    $post=Post::find($slug);#call Post pass value from html 
    return view("post",["posts"=>$post]);
})->where("post", "[A-Za-z_\-]+"); 
// })->whereAlphaNumeric("post"); 