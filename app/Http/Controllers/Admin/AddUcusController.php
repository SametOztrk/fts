<?php

namespace App\Http\Controllers\Admin;

use App\Ucuslar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddUcusController extends Controller
{
    
	public function store(Request $request)
    {

    	$a= new Ucuslar();

		$a->rota_id=$request->rota_id;
		$a->plan_id=$request->plan_id;
		$a->save();

		return redirect()->to('admin/dashboard');
    }


}
