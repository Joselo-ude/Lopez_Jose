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
        $libr = new libro();
        $libr->ISBN=$request->input('isbn');
        $libr->titulo=$request->input('titulo');
        $libr->cantidad=$request->input('cantidad');
        $libr->precio=$request->input('precio');
        $libr->stock=$request->input('stock');
        $libr->save();
        
        return redirect()->route('regist');
        }
    public function regis(){
       //$lib = DB::table('libros')->get();
       //return view('libros.vislib',['lib'=> $lib]);

       $lib= Libro::all();
       return view('libros.vislib',['lib'=> $lib]);
    }
}

