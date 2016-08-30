@extends('Plantilla.Interfaz')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form class="navbar-form navbar-left" role="search">
		   	  <table class="table table-striped">
			    <tr>
				  <td><strong>Identificación</strong></td>
				  <td><strong>Solicitud</strong></td>
				  <td><strong>Objeto contractual</strong></td>
				  <td><strong>Monto</strong></td>
				  <td><strong>Oficio</strong></td>
				  <td><strong>P&C</strong></td>
				</tr>
				
				@foreach($programa as $Programa)
					<tr>
					  <td>{{$Programa->SubPartida}}</td>
					  <td>{{$Programa->Solicitud}}</td>
					  <td>{{$Programa->Obj_cont_soli}}</td>
					  <td>{{$Programa->Monto}}</td>
					  <td>{{$Programa->Oficio_ini}}</td>
					  <td>{{$Programa->PC}}</td>
					  <td>
					  	<a href= "#" class="btn btn-primary" role="button">Procesos</a>
					  	<a href= "#" class="btn btn-primary" role="button">Modificar</a>
					  	<a href= "{{ route('MCJD.Analista.destroy', $Analista->Identificacion) }}" class="btn btn-primary" role="button">Eliminar</a>
					  </td>
					</tr>
				@endforeach
			  </table>
			</form>
		   
		  </div>
		</div>
	</div>
@endsection