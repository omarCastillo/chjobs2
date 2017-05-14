@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
	<div class="col-sm-offset-2 col-sm-8">	
	<form action="rouete => registro-postulante" id="form-ch" role="form">

	  <div class="form-group">
	    <label for="nombre_interesado">Nombre</label>
	    <input type="text" class="form-control" id="nombre_interesado" name="nombre_interesado" 
	           placeholder="Nombre">
	  </div>

	  <div class="form-group">
	    <label for="apelllidos_interesado">Apellidos</label>
	    <input type="text" class="form-control" id="apelllidos_interesado" name="apelllidos_interesado" 
	           placeholder="Apellidos">
	  </div>

	  <div class="form-group">
	    <label for="edad">Edad</label>
	    <input type="number" class="form-control" id="edad" name="edad" 
	           placeholder="Edad">
	  </div>

	  <div class="form-group">
	    <label for="telefono_casa">Telefono de casa</label>
	    <input type="number" class="form-control" id="telefono_casa" name="telefono_casa" 
	           placeholder="Telefono de casa">
	  </div>

	  <div class="form-group">
	    <label for="telefono_celular">Telefono celular</label>
	    <input type="number" class="form-control" id="telefono_celular" name="telefono_celular" 
	           placeholder="Telefono celular">
	  </div>
	  
	  <div class="form-group">
	    <label for="coreo_electronico">Correo electronico</label>
	    <input type="email" class="form-control" id="coreo_electronico" name="coreo_electronico" 
	           placeholder="Correo electronico">
	  </div>
		
		<h2>Direccion</h2>

	  <div class="form-group">
	    <label for="cp">Codigo Postal</label>
	    <input type="number" class="form-control" id="cp" name="cp" 
	           placeholder="Codigo Postal">
	  </div>

	  <div class="form-group">
	    <label for="estado">Estado</label>
	    <input type="text" class="form-control" id="estado" name="estado" 
	           placeholder="Estado">
	  </div>

	  <div class="form-group">
	    <label for="colonia">Colonia</label>
	    <input type="number" class="form-control" id="colonia" name="colonia" 
	           placeholder="Colonia">
	  </div>
	 
	 <div class="form-group">
	    <label for="grado_estudios">Ultimo grado de estudios</label>
	    <input type="text" class="form-control" id="grado_estudios" name="grado_estudios" 
	           placeholder="Ultimo grado de estudios">
	  </div>

	  <div class="form-group">
	    <label for="especialidad">Especialidad</label>
	    <input type="text" class="form-control" id="especialidad" name="especialidad" 
	           placeholder="Especialidad">
	  </div>

	  <div class="form-group">
	    <label for="idioma">Idioma</label>
	    <input type="text" class="form-control" id="idioma" name="idioma" 
	           placeholder="Idioma">
	  </div>

	  <div class="form-group">
	    <label for="ultimo_cargo">Ultimo cargo</label>
	    <input type="text" class="form-control" id="ultimo_cargo" name="ultimo_cargo" 
	           placeholder="Ultimo cargo">
	  </div>

	  <div class="form-group">
	    <label for="curso">Curso</label>
	    <input type="text" class="form-control" id="curso" name="curso" 
	           placeholder="Curso">
	  </div>

	  
	  <button type="submit" class="btn btn-default">Registrar</button>
	</form>
	</div>
</div>
</div>


@endsection
