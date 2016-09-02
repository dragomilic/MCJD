@extends('Plantilla.Interfaz')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form action="{{ route('MCJD.Analista.update') }}" method="get" accept-charset="utf-8">
		   	
		   	@foreach($analista as $Analista)
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
			@endforeach
			  
			  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
			  
			</form>
		   
		  </div>
		</div>
	</div>
@endsection