<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $fillable=[
        'user_id', 'order_id', 'title', 'message', 'ticket_type_id', 
        'pending',
    ];
    public function ticketType(){
        return $this->belongsTo(ticketType::class);
    }
}
