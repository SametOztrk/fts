<?php

namespace App\Http\Controllers\Admin;

use App\Havalimanları;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddHavalimanıController extends Controller
{
   

    public function store(Request $request)
    {
       $a =new Havalimanları();

       $a->liman_adı = $request->liman_adı;
       $a->sehir_id  = $request->sehir;   //app.blade de id si sehir olan yerden çekiyor 
       $a->save();

       return redirect()->to('admin/dashboard');
    }
}