<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
        #Olde  function 
        $files=File::files(resource_path("posts/"));
        // return array_map(function($file){
        //     return $file->getContents();
        //  },$files);
         #End 
        return collect($files)->map(function ($file){
            $document= YamlFrontMatter::parseFile($file);
           return new Post($document->slug,$document->title,$document->date,$document->subPar,$document->body());
        }
        );


    }
    public static function find($slug)
    {
        return Static::all()->firstWhere("slug",$slug);
    }
}
