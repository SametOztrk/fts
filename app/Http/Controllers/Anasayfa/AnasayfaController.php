<?php

namespace App\Http\Controllers\Anasayfa;

use App\Sehirler;
use App\Havalimanları;
use App\Rota;
use App\Ucak;
use App\User;
use App\Fatura;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Input;


class AnasayfaController extends Controller
{
    
    public function index()
 		{
 		   
 			$havalimanları= DB::table('havalimanlarıs')
      ->select('havalimanlarıs.*','havalimanlarıs.liman_id as liman_id')
      ->get();

   
	
  		return view('Anasayfa.anasayfa',compact('havalimanları'));
		}


    public function search(Request $request)
    {
     
      /*$ucuslar  = DB::select("SELECT  h.liman_adı as liman_adi,t.liman_adı as hedef_liman_adi,y.baslangıc_tarihi,u.plan_id,u.ucus_id,r.rota_id  FROM ucuslars as u JOIN rotas as r ON u.rota_id = r.rota_id JOIN yıllık_plans as y ON u.plan_id = y.yıllık_plan_id JOIN havalimanlarıs as h ON h.liman_id = r.liman_id JOIN havalimanlarıs as t ON t.liman_id = r.hedef_liman_id WHERE h.liman_adı='$request->liman_adı' and t.liman_adı='$request->hedef_liman_adı' and DATE_FORMAT(y.baslangıc_tarihi, '%Y-%m-%d')='$request->tarih'");
      */
      

      // m-d-y
      $a=$request->tarih;
      $newDate=date('Y-m-d', strtotime($a));

//      echo json_encode($newDate);


     $seferler =DB::select("SELECT h.liman_adı as liman_adi,t.liman_adı as hedef_liman_adi,y.baslangıc_tarihi,u.plan_id,u.ucus_id,r.rota_id,u.ucus_id,s.sefer_id,uc.ucak_adı,uc.koltuk_sayısı,s.ücret FROM seferlers as s JOIN ucaklars as uc ON s.ucak_id=uc.ucak_id JOIN ucuslars u ON s.ucus_id=u.ucus_id JOIN rotas as r ON u.rota_id=r.rota_id JOIN yıllık_plans as y ON u.plan_id = y.yıllık_plan_id JOIN havalimanlarıs as h ON h.liman_id=r.liman_id JOIN havalimanlarıs as t ON t.liman_id=r.hedef_liman_id WHERE h.liman_adı='$request->liman_adı' and t.liman_adı='$request->hedef_liman_adı' and y.baslangıc_tarihi='$newDate'");


        

        //echo json_encode($seferler);  

        /*
        silinen kod

        and DATE_FORMAT(y.baslangıc_tarihi, '%Y-%m-%d')='$request->tarih'

        */

        

      if($seferler)
        $response = array('status' => 1,'data' => $seferler);
      else
        $response = array('status' => 0,'data' => ''); 
      
      echo json_encode($response);
    
  
    }

/*
    public function buy(Request $request)
    {

     
     
       $users=DB::table('users')->where('email',$request->email)
      -> get();
       
          

        if($users)
          $response = array('status' => 1,'data' => $users);
        else
          $response = array('status' => 0,'data' => ''); 
      
        echo json_encode($response);


    }

    */


    public function buy(Request $request)
    {         

        $data = $request->all();
        $data2=$request->all();
        $data3=$request->all();

        $data = (int)$data["object"]["ucret"];
        $data2= (int)$data2["object"]["name"];
        $data3= (int)$data3["object"]["sefer"];



        $fatura=Fatura::where('müsteri_id','=','$data2')->first();

        echo $fatura;



        $a = new Fatura();
        $a->ücret=$data;
        $a->müsteri_id=$data2;
        $a->sefer_id=$data3;
        $a->save();
     
       /*
          $arr[0]=$data;
          $arr[1]=$data2;
          $arr[2]=$data3;
        */

        //echo json_encode(array("return"=>$data));


        // echo json_encode(array($arr));
  
    }
}