<?php

namespace App\Http\Controllers\Admin;

use App\Rota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddRotaController extends Controller
{
    public function store(Request $request)
    {
    	$a = new Rota();

    	$a->liman_id=$request->liman;
    	$a->hedef_liman_id=$request->hedef_liman;
    	$a->save();

    	return redirect()->to('admin/dashboard');
    }
}
