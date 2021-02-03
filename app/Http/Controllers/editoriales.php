<?php

namespace App\Http\Controllers;

use Illuminate\Support\FACADES\DB;
use Illuminate\Http\Request;

class editoriales extends Controller
{
    public function showedito(){
        $edi = DB::table('editorial')->get();
        return view('editoriales.visedi',['edi'=> $edi]);
    }
}
