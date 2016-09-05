@extends('Plantilla.Interfaz')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form method="get" accept-charset="utf-8">
		   		<a class="btn btn-primary btn-lg btn-block" href="AddContratacion" role="button">Agregar</a>
		   		<hr/>
		   			<!---->
		   		<table class="table table-striped">
			    <tr>
				  <td><strong>Codigo</strong></td>
				  <td><strong>Recibo</strong></td>
				  <td><strong>Analista</strong></td>
				  <td><strong>Tramite</strong></td>
				  <td><strong>Apertura</strong></td>
				  <td><strong>Proveedor</strong></td>
				  <td><strong>Funciones</strong></td>
				</tr>
				
				@foreach($contrato as $Contrato)
					<tr>
					  <td>{{$Contrato->Codigo}}</td>
					  <td>{{$Contrato->Recibo}}</td>
					  <td>{{$Contrato->Analista}}</td>
					  <td>{{$Contrato->Tramite}}</td>
					  <td>{{$Contrato->Apertura}}</td>
					  <td>{{$Contrato->Cod_Proveedor}}</td>
					  <td>
					  	<a href="{{ route('MCJD.Contratacion.edit',  $Estados->Codigo) }}" type="button" class="btn btn-primary">Modificar</a>
					  	<a href="{{ route('MCJD.Contratacion.destroy',  $Estados->Codigo) }}" type="button" class="btn btn-primary">Eliminar</a>
					  </td>
					</tr>
				@endforeach
			  </table>
			  
			</form>
		   
		  </div>
		</div>
	</div>
@endsection