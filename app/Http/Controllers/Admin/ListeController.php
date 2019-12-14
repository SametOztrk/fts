<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ListeController extends Controller
{	
    public function getRotas()
   {    
   	/*
         $query = DB::table('ucuslars')
            ->join('yıllık_plans','ucuslars.plan_id','=','yıllık_plans.yıllık_plan_id')
            ->join('rotas','ucuslars.rota_id','=','rotas.rota_id')
            ->select('ucuslars.ucus_id as ucus_id','ucuslars.plan_id as plan_id','yıllık_plans.baslangıc_tarihi as baslangıc_tarihi','rotas.rota_id as rota_id','rotas.liman_id as liman_id','rotas.hedef_liman_id as hedef_liman_id',)

            ->get();
	*/

            $ucuslar  = DB::select('SELECT h.liman_adı as liman_adi,t.liman_adı as hedef_liman_adi,u.plan_id,y.baslangıc_tarihi,u.ucus_id,r.rota_id  FROM ucuslars as u JOIN rotas as r ON u.rota_id = r.rota_id JOIN yıllık_plans as y ON u.plan_id = y.yıllık_plan_id JOIN havalimanlarıs as h ON h.liman_id = r.liman_id JOIN havalimanlarıs as t ON t.liman_id = r.hedef_liman_id');



        return datatables($ucuslar)->make(true);
    }
}