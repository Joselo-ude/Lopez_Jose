@extends('master')
   @section('content')
        <h1>Productos Registrados</h1> 
        
        <button class="btn btn-primary" type="submit">Button</button>
        
        <h1>libros</h1> 

<div class="container">
        <div class="row">
                @foreach($lib as $s)
                <div class="col -md -4">
                        <div class="card" style="width: 18rem;">
                        
                        <div class="card-body"><
                        <p class="card-text">Id: {{$s->id}}</p>
                        <p class="card-text">ISBN: {{$s->ISBN}}</p>
                        <p class="card-title">Titulo: {{$s->titulo}}</p>                    
                        <p class="card-text">Precio: {{$s->precio}}</p>
                        <p class="card-text">Stock: {{$s->stock}}</p>
                        <p class="card-text">Editorial: {{$s->editorial}}</p>
                        
                        <button class="btn btn-primary" type="submit">Actualizar</button>
                         
                        </div>
                        </div>
                </div>
                @endforeach
        </div>
</diiv>
@stop
@stop