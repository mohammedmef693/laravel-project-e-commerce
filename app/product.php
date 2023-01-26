<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable=[
        'title', 'description', 'unit', 'price', 'total', 
        
    ];
    public function image(){
        return $this->hasMany(image::class);
    }
    public function reviews(){
        return $this->hasMany(review::class);
    }
    public function category(){
        return $this->belongsTo(category::class);
    }
    public function tags(){
        return $this->belongsToMany(tag::class);
    }
}

