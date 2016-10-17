@extends('Plantilla.Interfaz')

@section('title', 'Nuevo estado')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form action="{{ route('MCJD.RevReq.store', $progra->SubPartida) }}" method="get" accept-charset="utf-8">
		   		
		   	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Codigo</label>
		    	<input name="Codigo" type="text" class="form-control" placeholder="Codigo">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Analista</label>
		    	<input name="Analista" type="text" class="form-control" placeholder="Estado">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Traslado</label>
		    	<input name="Traslado" type="text" class="form-control" placeholder="Motivo">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Estado</label>
		    	<input name="Estado" type="text" class="form-control" placeholder="Motivo">
	    	  </div>
			  
			  <div class="form-group">
		   	  	<label for="LbIdentificacion">Tramite</label>
		    	<input name="Tramite" type="text" class="form-control" placeholder="Motivo">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Observación</label>
		    	<textarea name="Observacion" type="text" class="form-control" placeholder="Motivo"></textarea>
	    	  </div>
	    	  
			  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
			  
			</form>
		   
		  </div>
		</div>
	</div>
@endsection