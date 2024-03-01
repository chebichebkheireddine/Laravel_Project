<?php

namespace App\Models;

use Illuminate\Support\Facades\File;

class Post
{

    public $slug;
    public $title;
    public $date;
    public $subPar;
    public $body;
    public function __construct($slug,$title,$date,$subPar,$body)
    {
        $this->slug=$slug;
        $this->title=$title;
        $this->date=$date;
        $this->subPar=$subPar;
        $this->body=$body;
    }
    public static function all(){
        $files=File::files(resource_path("posts/"));
        
        return array_map(function($file){
            return $file->getContents();
         },$files);


    }
    public static function find($solg)
    {
        $path = resource_path("posts/{$solg}.html");
        // ddd($path);#test Dump this file 
        // protocol to path  if exsist
        if (!file_exists($path)) {
            #this file is not here
            abort(404);
            // return redirect("/");
        }
        // // Cach file to do it 
         return  cache()->remember("/post/{$path}", 4, function () use ($path) {
            var_dump("file_get_contents");
            return file_get_contents($path);
        });
        // // cache 
        // $post = file_get_contents($path);
    }
}
