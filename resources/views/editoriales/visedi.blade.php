@extends('master')
   @section('content')
        <h1>Editoriales</h1> 

<div class="container">
        <div class="row">
                @foreach($edi as $e)
                <div class="col -md -4">
                        <div class="card" style="width: 18rem;">
                        
                        <div class="card-body"><
                        <p class="card-text">Id: {{$e->id}}</p>
                        <p class="card-title">Nombre: {{$e->nombre}}</p>                    
                        <p class="card-text">Direccion: {{$e->direccion}}</p>
                        <p class="card-text">Ciudad: {{$e->ciudad}}</p>
                        <p class="card-text">Telefono: {{$e->telefono}}</p>
                        
                        
                         
                        </div>
                        </div>
                </div>
                @endforeach
        </div>
</diiv>
@stop