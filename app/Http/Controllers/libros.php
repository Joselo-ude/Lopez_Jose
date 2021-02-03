<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class libros extends Controller
{
    public function vis(){
        return view('libros.vislib');
    }


    public function reg(){
        return view('libros.registrar');
    }
}

