<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YıllıkPlan extends Model
{
   protected $table='yıllık_plans';

/*
   public function seferlers()
    {

    	return $this->hasMany('seferlers');

    }
*/    

    public function ucus()
    {
    	return $this->hasMany('ucuslars');
    }


}

