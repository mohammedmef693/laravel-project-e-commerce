<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $fillable=[
        'url', 'product_id',
        
    ];
    public function product(){
        return $this->belongsTo(product::class);
    }
}
