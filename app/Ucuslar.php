<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ucuslar extends Model
{
		protected $table='ucuslars';    

 		public function rotas()
   		{
   			return $this->hasMany('rotas');
   		}


		public function yıllık()
		
		{
			return $this->hasMany('yıllık_plans');
		}

		public function seferler()

		{
			return $this->hasMany('seferlers');
		}

}
