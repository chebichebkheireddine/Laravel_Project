<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    // add Hassmany
    public function posts()  {
        // hasmany ,hasone ,belongsTo ,belongToMany
        return $this->hasMany(Post::class);
    } 
}
