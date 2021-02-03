@extends('master')
@section('content')
<form class="row g-3">
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">ISBN</label>
    <input type="text" class="form-control is-valid" id="validationServer01" value="" required>
    <div class="valid-feedback">
      
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Titulo</label>
    <input type="text" class="form-control is-valid" id="validationServer02" value="" required>
    <div class="valid-feedback">
      
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Cantidad</label>
    <input type="text" class="form-control is-valid" id="validationServer02" value="" required>
    <div class="valid-feedback">
      
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Precio</label>
    <input type="text" class="form-control is-valid" id="validationServer02" value="" required>
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