@extends('Plantilla.Interfaz')

@section('title', 'Nuevo estado')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form action="{{ route('MCJD.Legal.store' , $progra->SubPartida) }}" method="get" accept-charset="utf-8">
		   		
	    	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Envio a contrato, aprobacion o referendo</label>
		    	<input name="Envio" type="text" class="form-control" placeholder="Estado">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Recibido contrato aprobado</label>
		    	<input name="Recibido" type="text" class="form-control" placeholder="Motivo">
	    	  </div>
			  
			  <button type="Recibido" class="btn btn-primary btn-lg btn-block">Guardar</button>
			  
			</form>
		   
		  </div>
		</div>
	</div>
@endsection