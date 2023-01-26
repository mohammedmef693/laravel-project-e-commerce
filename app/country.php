<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $table ='countries';
    protected $primaryKey ='id';

    public function cities(){
        return $this->hasMany('App\city','id','country_id');
    }
    public function states(){
        return $this->hasMany('App\state','id','country_id');
    }
}

