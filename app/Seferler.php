<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seferler extends Model
{
   protected $table='seferlers';

   public function ucuslar()
   {
   	 return $this->belongsTo('ucuslars');
   }

   public function fatura()
   {
     return $this->hasMany('faturas');
   }

   public function ucaklar()
   {
   	return $this->hasMany('ucaklars');
   }
}
