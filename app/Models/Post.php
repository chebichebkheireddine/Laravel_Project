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
    public function __construct($slug, $title, $date, $subPar, $body)
    {
        $this->slug = $slug;
        $this->title = $title;
        $this->date = $date;
        $this->subPar = $subPar;
        $this->body = $body;
    }
    public static function all()
    {
        #Olde  function 
        // return array_map(function($file){
        //     return $file->getContents();
        //  },$files);
        #End
        return  cache()->rememberForever("khiro.all", function () {
            $files = File::files(resource_path("posts/"));

            return collect($files)->map(
                function ($file) {
                    $document = YamlFrontMatter::parseFile($file);
                    return new Post($document->slug, $document->title, $document->date, $document->subPar, $document->body());
                }
            );
        })->sortByDesc("date");
    }
    public static function find($slug)
    {
        return static::all()->firstWhere("slug", $slug);
    }
    public static function test()
    {
        return cache()->rememberForever("test", function () {
            return [
                "khiro" => "test",
                "A" => "test",
                "B" => "test"
            ];
        });
    }
}
