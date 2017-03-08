@extends('Plantilla.Interfaz')

@section('title', 'Modificar analista')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form action="{{ route('MCJD.Analista.update') }}" method="put" accept-charset="utf-8">
		   	
		   	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Identificacion</label>
		    	<input name="Identificacion" type="text" class="form-control" value={{$Analista->Identificacion}}>
	    	  </div>
			
			  <div class="form-group">
			  	<label for="LbNombre">Nombre</label>
			  	<input name="Nombre" type="text" class="form-control" value={{$Analista->Nombre}}>
			  </div>
			  
			  <div class="form-group">
			  	<label for="LbPrimerApellido">Primer apellido</label>
			    <input name="PrimerApellido" type="text" class="form-control" value={{$Analista->PrimerApellido}}>
			  </div>
			  
			  <div class="form-group">
			  	<label for="LbSegundoApellido">Segundo apellido</label>
			    <input name="SegundoApellido" type="text" class="form-control" value={{$Analista->SegundoApellido}}>
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