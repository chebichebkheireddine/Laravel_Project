<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable=["user_id","categiry_id","title","slug","excerpt","body"];
    protected $guarded=["id"];
    // this is fixs all problem with N+1
    protected $with=["category","author"];
    // scopFilter
    public function scopeFilter($query,array $filters){
        $query->when($filters["search"]??false,function($query,$search){

            $query->where("title", "like", "%" . $search . "%")
                ->orwhere("body", "like", "%" . $search . "%");
        });
        return $query;

    }

    public function category()  {
        // hasmany ,hasone ,belongsTo ,belongToMany
        return $this->belongsTo(Category::class);
    }
    public function author () {
        return $this->belongsTo(User::class,"user_id");

    }
}
