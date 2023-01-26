<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable=[
        'user_id', 'payment_id', 'cart_id', 'order_date', 
        
    ];
    public function customer(){
        return $this->belongsTo(user::class);
    }
    public function cart(){
        return $this->belongsTo(cart::class);
    }
    public function payment(){
        return $this->belongsTo(payment::class);
    }
}
