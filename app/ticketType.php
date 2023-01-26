<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticketType extends Model
{
    protected $fillable=[
        'name', 
        
    ];
    public function tickets(){
        return $this->hasMany(ticket::class);
    }
}
