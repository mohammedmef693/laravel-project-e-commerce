<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $table ='cities';
    protected $primaryKey ='id';
    public function country(){
        return $this->belongsTo('App\country','country_id','id');
    }
    public function state(){
        return $this->belongsTo('App\state','state_id','id');
    }
}
