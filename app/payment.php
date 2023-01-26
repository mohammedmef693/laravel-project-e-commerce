<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $fillable=[
        'amount', 'user_id', 'order_id', 'paid_on', 'payment_reference', 
        
    ];
    public function customer(){
        return $this->belongsTo(user::class);
    }
    public function order(){
        return $this->belongsTo(order::class);
    }
}
