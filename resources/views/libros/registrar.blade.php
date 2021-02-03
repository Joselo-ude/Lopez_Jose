@extends('master')
@section('content')
<form action="({url('libros/registrar')})" method="POST">
@csrf
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">ISBN</label>
    <input type="text" class="form-control is-valid" id="isbn" value="" required>
    <div class="valid-feedback">
      
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Titulo</label>
    <input type="text" class="form-control is-valid" id="titulo" value="" required>
    <div class="valid-feedback">
      
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Cantidad</label>
    <input type="text" class="form-control is-valid" id="cantidad" value="" required>
    <div class="valid-feedback">
      
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Precio</label>
    <input type="text" class="form-control is-valid" id="precio" value="" required>
    <div class="valid-feedback">
      
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Stock</label>
    <input type="text" class="form-control is-valid" id="stock" value="" required>
    <div class="valid-feedback">
      
    </div>
  </div>
  
  <div class="col-md-3">
    <label for="validationServer04" class="form-label">State</label>
    <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option >Norma</option>
      <option>Mc Graw Hill</option>
      <option>Alfaomega Colombiana</option>
      <option>Los Tres Editores S.A.S.</option>
      <option>La Santillana</option>
    </select>
    
  <div class="col-12">
   
    <button class="btn btn-primary" type="submit">Registrar</button>
  </div>
  <div class="col-12">
  
    <button class="btn btn-primary" type="submit">Cancelar</button>
  </div>
</form>
@stop