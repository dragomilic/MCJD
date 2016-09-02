@extends('Plantilla.Interfaz')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   	<form action="{{ route('MCJD.Proveedor.store') }}" method="get" accept-charset="utf-8">
		   	  
		   	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Identificacion</label>
		    	<input name="Identificacion" type="text" class="form-control" placeholder="Identificacion">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Nombre</label>
		    	<input name="Nombre" type="text" class="form-control" placeholder="Nombre">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Direccion</label>
		    	<input name="Direccion" type="text" class="form-control" placeholder="Direccion">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Telefono</label>
		    	<input name="Telefono" type="text" class="form-control" placeholder="Telefono">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Fax</label>
		    	<input name="Fax" type="text" class="form-control" placeholder="Fax">
	    	  </div>
	    	  
	    	  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
	    	  
			</form>
		   
		  </div>
		</div>
	</div>
@endsection