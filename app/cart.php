<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $fillable=[
        'cart_items', 'total',
        
    ];
}
