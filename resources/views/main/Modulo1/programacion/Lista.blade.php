@extends('Plantilla.Interfaz')

@section('title', 'Lista de programas')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form method="get" accept-charset="utf-8">
		   	  <a class="btn btn-primary btn-lg btn-block" href="AddPrograma" role="button">Agregar</a>
		   	  <hr/>
		      <!---->
		   	  <table class="table table-striped">
			    <tr>
			      <td><strong>Codigo</strong></td>
				  <td><strong>SubPartida</strong></td>
				  <td><strong>Solicitud</strong></td>
				  <td><strong>Objeto contractual</strong></td>
				  <td><strong>Funciones</strong></td>
				</tr>
				
				@foreach($programa as $Programa)
					<tr>
					  <td>{{$Programa->Codigo}}</td>
					  <td>{{$Programa->SubPartida}}</td>
					  <td>{{$Programa->Solicitud}}</td>
					  <td>{{$Programa->Obj_cont_soli}}</td>
					  <td>
					  	<a href= "#" class="btn btn-primary" role="button">Procesos</a>
					  	<a href= "{{ route('MCJD.Programa.edit', $Programa->SubPartida) }}" class="btn btn-primary" role="button">Modificar</a>
					  	<a href= "{{ route('MCJD.Programa.destroy', $Programa->SubPartida) }}" class="btn btn-primary" role="button">Eliminar</a>
					  </td>
					</tr>
				@endforeach
			  </table>
			</form>
		   
		  </div>
		</div>
	</div>
@endsection