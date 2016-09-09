@extends('Plantilla.Interfaz')

@section('title', 'Lista de analistas')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form class="navbar-form navbar-left" role="search">
		   	  <table class="table table-striped">
			    <tr>
				  <td><strong>Identificación</strong></td>
				  <td><strong>Nombre</strong></td>
				  <td><strong>Primer apellido</strong></td>
				  <td><strong>Segundo apellido</strong></td>
				  <td><strong>Funciones</strong></td>
				</tr>
				
				@foreach($analista as $Analista)
					<tr>
					  <td>{{$Analista->Identificacion}}</td>
					  <td>{{$Analista->Nombre}}</td>
					  <td>{{$Analista->PrimerApellido}}</td>
					  <td>{{$Analista->SegundoApellido}}</td>
					  <td>
					  	<a href= "#" class="btn btn-primary" role="button">Procesos</a>
					  	<a href= "{{ route('MCJD.Analista.edit', $Analista->id) }}" class="btn btn-primary" role="button">Modificar</a>
					  	<a href= "{{ route('MCJD.Analista.destroy', $Analista->id) }}" class="btn btn-primary" role="button">Eliminar</a>
					  </td>
					</tr>
				@endforeach
			  </table>
			</form>
		   
		  </div>
		</div>
	</div>
@endsection