<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shipment extends Model
{
    protected $fillable=[
        'user_id', 'payment_id', 'order_id', 'status', 'shipment_date', 
        
    ];
    public function customer(){
        return $this->belongsTo(user::class);
    }
    public function order(){
        return $this->belongsTo(order::class);
    }
    public function payment(){
        return $this->hasOne(payment::class);
    }
}
