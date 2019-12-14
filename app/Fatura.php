<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fatura extends Model
{
	protected $table='faturas';

    public function seferler()
    {
    	return $this->belongsTo('seferlers');
    }
}
