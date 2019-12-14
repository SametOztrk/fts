<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Havalimanları extends Model
{
    protected $table='havalimanlarıs';

    public function sehirler()
    {
    	return $this->belongsTo('sehirlers');
    }

    public function rotas()
    {
    	return $this->hasMany('rotas');
    }
   
}
