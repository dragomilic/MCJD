@extends('Plantilla.Interfaz')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form class="navbar-form navbar-left" role="search">
		   	
			    <input type="text" class="form-control" placeholder="Identificación">
			    <input type="text" class="form-control" placeholder="Nombre">
			    <input type="text" class="form-control" placeholder="Primer apellido">
			    <input type="text" class="form-control" placeholder="Segundo apellido">
			  
			  <button type="submit" class="btn btn-default">Guardar</button>
			</form>
		   
		  </div>
		</div>
	</div>
@endsection