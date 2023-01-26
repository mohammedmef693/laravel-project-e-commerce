<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    protected $table ='states';
    protected $primaryKey ='id';

    public function cities(){
        return $this->hasMany('App\city','id','state_id');
    }
    public function country(){
        return $this->hasMany('App\country','id','country_id');
    }
       
    }

