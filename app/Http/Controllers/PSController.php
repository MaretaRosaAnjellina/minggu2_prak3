<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PSController extends Controller
{
    Public function ti(){
        return view('prodi.ti');
    }
    public function mi(){
        return view('prodi.mi');
    }
}
