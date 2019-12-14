<?php

namespace App\Http\Controllers\Admin;

use App\YıllıkPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;	

use App\Http\Controllers\Controller;

use DateTime;
use DateInterval;

class YıllıkPlanController extends Controller
{
    
    public function store(Request $request)
    {

    	$b=$request->gün_sayısı;
        $i = $request->baslangıc_tarihi; 
        $day = new DateTime($i);
        $sayac=0;
        
    	while($b >= 0)
    	{       
    		    $sayac++;
		    	$a = new YıllıkPlan();

                if($sayac != 1)
		    	$day = $day->add(new DateInterval("P1D"));

		    	$a->baslangıc_tarihi=$day->format('Y-m-d H:i:s');	
		    	$a->save();
		    	$b--;
		 }

    	
	return redirect()->route('admin.dashboard');
     }
} 
  



