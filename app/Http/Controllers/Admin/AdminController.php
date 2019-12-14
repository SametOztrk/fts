<?php

namespace App\Http\Controllers\Admin;

use App\Sehirler;
use App\Havalimanları;
use App\Seferler;
use App\Rota;
use App\Ucak;
use App\YıllıkPlan;
use App\Ucuslar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    
    public function __construct()
   {

         $this->middleware('auth:admin');
   }

   public function index()
   {

   	$sehirler= DB::table('sehirlers')
      ->select('sehirlers.sehir_id as sehir_id','sehirlers.sehir_adı as sehir_adı')
      ->get();

      
      $havalimanları= DB::table('havalimanlarıs')
      ->join('sehirlers','havalimanlarıs.sehir_id','=','sehirlers.sehir_id')
      ->select('havalimanlarıs.*','havalimanlarıs.sehir_id as liman_sehir_id','havalimanlarıs.liman_adı as liman_adı')
      ->get();

 
      $seferler= DB::table('seferlers')
      ->join('ucaklars','seferlers.ucak_id','=','ucaklars.ucak_id')
      ->join('ucuslars','seferlers.ucus_id','=','ucuslars.ucus_id')
      ->select('seferlers.*','seferlers.ucak_id as sefer_ucak_id','seferlers.ucus_id as sefer_ucus_id')
      ->get();

      
      $ucaklar= DB::table('ucaklars')
      ->select('ucaklars.ucak_id as ucak_id','ucaklars.ucak_adı as ucak_adı')
      ->get();


      $yıllık= DB::table('yıllık_plans')
      ->select('yıllık_plans.*')
      ->get();


      $ucus= DB::table('ucuslars')
      ->select('ucuslars.*')
      ->get();


       $ucuslar  = DB::select('SELECT h.liman_adı as liman_adi,t.liman_adı as hedef_liman_adi,u.plan_id,y.baslangıc_tarihi  FROM ucuslars as u JOIN rotas as r ON u.rota_id = r.rota_id JOIN yıllık_plans as y ON u.plan_id = y.yıllık_plan_id JOIN havalimanlarıs as h ON h.liman_id = r.liman_id JOIN havalimanlarıs as t ON t.liman_id = r.hedef_liman_id');

/*
      echo "<pre>";
      print_r($ucuslar);
      echo "</pre>";
      exit();
*/

      $rota=Rota::all();

      $rotas=Rota::all();


  
   return view('admin.dashboard',compact('sehirler','havalimanları','seferler','ucaklar','yıllık','rota','ucuslar','rotas','ucus'));

   }

   
   public function ajax()
   {
      return view('admin.tablo');
   }

   
}
