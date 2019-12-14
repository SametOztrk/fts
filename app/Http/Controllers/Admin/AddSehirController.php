<?php

namespace App\Http\Controllers\Admin;

use App\Sehirler;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddSehirController extends Controller
{
    public function store(Request $request)
    {
       $a =new Sehirler();

       $a->sehir_adı = $request->sehir_adı;
       $a->save();

       return redirect()->to('admin/dashboard');
    }
}
