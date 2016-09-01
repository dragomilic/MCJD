@extends('Plantilla.Interfaz')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form action="{{ route('MCJD.Estatus.store') }}" method="get" accept-charset="utf-8">
		   		
		   	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Codigo</label>
		    	<input name="Codigo" type="text" class="form-control" placeholder="Codigo">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Estado</label>
		    	<input name="Estado" type="text" class="form-control" placeholder="Estado">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Motivo</label>
		    	<input name="Motivo" type="text" class="form-control" placeholder="Motivo">
	    	  </div>
			  
			  <button type="submit" class="btn btn-default">Guardar</button>
			  
			</form>
		   
		  </div>
		</div>
	</div>
@endsection