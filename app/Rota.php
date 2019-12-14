<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rota extends Model
{
    
    protected $table='rotas';


    public function havalimanları()
    {
    	return $this->hasMany('havalimanlarıs');
    }

  

    public function ucuslar()
    {
        return $this->hasMany('ucuslars');
    }

 }
