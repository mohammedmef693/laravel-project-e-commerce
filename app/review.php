<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $fillable = [
        'user_id', 'product_id', 'stars', 'review', 
         
    ];

    public function customer(){
        return $this->belongsTo(user::class);
    }
    public function products(){
        return $this->belongsTo(product::class);
    }
}
