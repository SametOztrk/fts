<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sehirler extends Model
{

  protected $table='sehirlers';



 public function havalimanları()

 {
 	return $this->hasMany('havalimanlarıs');
 }


}
