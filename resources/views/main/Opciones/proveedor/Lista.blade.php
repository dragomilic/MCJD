@extends('Plantilla.Interfaz')

@section('title', 'Lista de proveedores')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   	<form method="get" accept-charset="utf-8">
		   		<a class="btn btn-primary btn-lg btn-block" href="AddProveedor" role="button">Agregar</a>
		   		<hr/>
		   			<!---->
		   		<table class="table table-striped">
			    <tr>
				  <td><strong>Identificacion</strong></td>
				  <td><strong>Nombre</strong></td>
				  <td><strong>Direccion</strong></td>
				  <td><strong>Telefono</strong></td>
				  <td><strong>Fax</strong></td>
				  <td><strong>Funciones</strong></td>
				</tr>
				
				@foreach($proveedor as $Proveedor)
					<tr>
					  <td>{{$Proveedor->Identificacion}}</td>
					  <td>{{$Proveedor->Nombre}}</td>
					  <td>{{$Proveedor->Direccion}}</td>
					  <td>{{$Proveedor->Telefono}}</td>
					  <td>{{$Proveedor->fax}}</td>
					  <td>
					  	<a href="{{ route('MCJD.Proveedor.edit',  $Proveedor->Identificacion) }}" type="button" class="btn btn-primary">Modificar</a>
					  	<a href="{{ route('MCJD.Proveedor.destroy',  $Proveedor->Identificacion) }}" type="button" class="btn btn-primary">Eliminar</a>
					  </td>
					</tr>
				@endforeach
			  </table>
			</form>
		   
		  </div>
		</div>
	</div>
@endsection