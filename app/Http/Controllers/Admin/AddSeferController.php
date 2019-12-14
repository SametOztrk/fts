<?php

namespace App\Http\Controllers\Admin;

use App\Seferler;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddSeferController extends Controller
{

	public function store(Request $request)
	{

	    $a = new Seferler();

	    $a->ucak_id=$request->ucak_id;
	    $a->ucus_id=$request->ucus_id;
	    $a->ücret=$request->ücret;
	    $a->save();

	    return redirect()->to('admin/dashboard');

	}
}
