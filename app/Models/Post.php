<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable=["user_id","categiry_id","title","slug","excerpt","body"];
    protected $guarded=["id"];

    public function category()  {
        // hasmany ,hasone ,belongsTo ,belongToMany
        return $this->belongsTo(Category::class);
    }
    public function author () {
        return $this->belongsTo(User::class,"user_id");
        
    }
}