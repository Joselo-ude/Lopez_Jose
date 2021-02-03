<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\libreria;
use App\Http\Controllers\editoriales;
use App\Http\Controllers\libros;
use App\Http\Controllers\visualizar;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[libreria::class,'getIndex'] );

Route::get('libros/vislib',[libros::class,'vis'] );
Route::get('libros/registrar',[libros::class,'reg'] );

Route::get('editoriales/visedi',[editoriales::class,'showedito'] );
