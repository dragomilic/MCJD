@extends('Plantilla.Interfaz')

@section('title', 'Nuevo estado')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form action="{{ route('MCJD.AproVisa.store', $progra->SubPartida) }}" method="get" accept-charset="utf-8">
		   		
		   	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Fecha Traslado a Proveedor</label>
		    	<input name="Proveedor" type="date" class="form-control" placeholder="Codigo">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Oficina de presupuesto</label>
		    	<input name="Presupuesto" type="date" class="form-control" placeholder="Estado">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Fecha Traslado Área Contratación</label>
		    	<input name="Area" type="date" class="form-control" placeholder="Motivo">
	    	  </div>
	    	  
	    	  <div class="form-group">
			   <label for="">Comentario</label>
			   <textarea name="Comentario" class="form-control" placeholder="Comentario" rows="3"></textarea>
			   </div>
			  
			  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
			  
			</form>
		   
		  </div>
		</div>
	</div>
@endsection