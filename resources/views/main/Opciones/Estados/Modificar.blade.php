@extends('Plantilla.Interfaz')

@section('title', 'Nuevo estado')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form action="{{ route('MCJD.Estatus.update') }}" method="get" accept-charset="utf-8">
		   		
		   	  <div class="form-group">
		   	  	<label for="LbCodigo">Codigo</label>
		    	<input name="Codigo" type="text" class="form-control" value={{$Estatus->Codigo}}>
	    	  </div>
			
			  <div class="form-group">
			  	<label for="LbEstado">Estado</label>
			  	<input name="Estado" type="text" class="form-control" value={{$Estatus->Estado}}>
			  </div>
			  
			  <div class="form-group">
			  	<label for="LbMotivo">Motivo</label>
			    <input name="Motivo" type="text" class="form-control" value={{$Estatus->Motivo}}>
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