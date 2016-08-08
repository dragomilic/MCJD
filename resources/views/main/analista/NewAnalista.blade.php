@extends('Plantilla.Interfaz')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form method="get" accept-charset="utf-8">
		   	
		   	  <div class="form-group">
		    	<input type="text" class="form-control" placeholder="Identificacion">
	    	  </div>
			  
			  <div class="form-group">
			  	<input type="text" class="form-control" placeholder="Nombre">
			  </div>
			  
			  <div class="form-group">
			    <input type="text" class="form-control" placeholder="Primer apellido">
			  </div>
			  
			  <div class="form-group">
			    <input type="text" class="form-control" placeholder="Segundo apellido">
			  </div>
			  
			  <button type="submit" class="btn btn-default">Guardar</button>
			  
			</form>
		   
		 </div>
		</div>
	</div>
@endsection