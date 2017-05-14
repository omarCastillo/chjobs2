@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
	<div class="col-sm-offset-2 col-sm-8">	
	<form id="form-ch" role="form">
	  <div class="form-group">
	    <label for="nombre_vacante">Nombre de la vacante</label>
	    <input type="text" class="form-control" id="nombre_vacante" name="nombre_vacante" 
	           placeholder="Nombre de la vancante">
	  </div>
	  <div class="form-group">
	    <label for="descripcion_vacante">Desrcipcion de la vacante</label>
	    <input type="text" class="form-control" id="descripcion_vacante" name="descripcion_vacante" placeholder="Desrcipcion de la vacante">
	  </div>
	  <div class="form-group">
	    <label for="salrio">Salario</label> 
	    <input type="number" class="form-control" id="salario" name="salario" placeholder="Salario">
	  </div>
	  <div class="form-group">
	    <label for="nombre_actividad">Actividades a realizar.</label>
	    <input type="text" class="form-control" id="nombre_actividad" name="nombre_actividad" placeholder="Actividades a realizar">
	  </div>
	  <div class="form-group">
	    <label for="nombre_requisito">Requisitos.</label>
	    <input type="text" class="form-control" id="nombre_requisito" name="nombre_requisito" placeholder="Requisitos">
	  </div>

	  <div class="form-group">
	    <label for="nombre_lugar">Lugar.</label>
	    <label class="checkbox-inline"><input type="checkbox" value="">CDMX</label>
	  	<label class="checkbox-inline"><input type="checkbox" value="">PUEBLA</label>
	  </div>

	  <div class="form-group">
	    <label for="tipo_jornada">Tipo de jornada.</label>
	    <input type="text" class="form-control" id="tipo_jornada" name="tipo_jornada" placeholder="Tipo de jornada">
	  </div>

	  <div class="form-group">
	    <label for="nombre_tag">Tag.</label>
	    <input type="text" class="form-control" id="nombre_tag" name="nombre_tag" placeholder="Tag">
	  </div>
	 
	  
	  <button type="submit" class="btn btn-default">Registrar</button>
	</form>
	</div>
</div>
</div>


@endsection
