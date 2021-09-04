<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Relacion muchos a uno user
    public function user(){
        return $this->belongsTo(User::class);
    }
    //Relacion muchos a uno category
    public function category(){
        return $this->belongsTo(Category::class);
    }
    //Relacion muchos a muchos tags
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    //Relacion uno a uno polimorfica image
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
