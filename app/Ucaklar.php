<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ucaklar extends Model
{
  
  protected $table='ucaklars';

  public function seferler()
  {
  	return $this->belongsTo('seferlers');
  }

  public function rota()
  {
  	return $this->belongsTo('rotas');
  }

}
