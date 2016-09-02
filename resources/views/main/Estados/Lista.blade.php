@extends('Plantilla.Interfaz')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form method="get" accept-charset="utf-8">
		   		<a class="btn btn-primary btn-lg btn-block" href="AddEstatus" role="button">Agregar</a>
		   		<hr/>
		   			<!---->
		   		<table class="table table-striped">
			    <tr>
				  <td><strong>Codigo</strong></td>
				  <td><strong>Estado</strong></td>
				  <td><strong>Motivo</strong></td>
				  <td><strong>Funciones</strong></td>
				</tr>
				
				@foreach($estados as $Estados)
					<tr>
					  <td>{{$Estados->Codigo}}</td>
					  <td>{{$Estados->Estado}}</td>
					  <td>{{$Estados->Motivo}}</td>
					  <td>
					  	<a type="button" class="btn btn-primary">Modificar</a>
					  </td>
					</tr>
				@endforeach
			  </table>
			  
			</form>
		   
		  </div>
		</div>
	</div>
@endsection