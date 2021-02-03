<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\libro;

class libros extends Controller
{
    public function vis(){
        return view('libros.vislib');
    }


    public function reg(Request $request){
        $lib = new libro();
        $lib->ISBN=$request->input('isbn');
        $lib->titulo=$request->input('titulo');
        $lib->cantidad=$request->input('cantidad');
        $lib->precio=$request->input('precio');
        $lib->stock=$request->input('stock');
        
        return view('libros.registrar');
    }
    public function showlib(){
       // $lib = DB::table('libros')->get();
       // return view('libros.vislib',['lib'=> $lib]);

       $libros - libro::all();
       return view('libros.vislib',['libros'-> $libros]);
    }
}

