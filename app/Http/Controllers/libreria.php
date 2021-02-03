<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class libreria extends Controller
{
    public function getIndex(){
        return view('principal');
    }
}
