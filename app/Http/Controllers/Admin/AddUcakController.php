<?php

namespace App\Http\Controllers\Admin;

use App\Ucaklar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddUcakController extends Controller
{

	public function store(Request $request)
	{
		$a= new Ucaklar();

		$a->seri_no=$request->seri_no;
		$a->koltuk_sayısı=$request->koltuk_sayısı;
		$a->ucak_adı=$request->ucak_adı;
		$a->save();

		return redirect()->to('admin/dashboard');

	}
    
}
