@extends('Plantilla.Interfaz')

@section('title', 'Lista de contrataciones')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form action="{{ route('MCJD.Contratacion.show') }}" method="get" accept-charset="utf-8">
		   	  <div class="form-inline">
		   	  	
		   	  	<div class="input-group">
		   	  	  <select name="Columna" class="form-control">
			    		<option>Codigo</option>
						<option>SubPartida</option>
				  </select>
				</div>
				
				<div class="input-group">
			      <input name="Busqueda" type="text" class="form-control" placeholder="Buscar">
			      <div type="button" class="input-group-addon"><a class="glyphicon glyphicon-search"></a></div>
			    </div>
			    
			  </div>
			  
			  @if ($mensaje != null)
			  	<hr />
    			<div class="alert alert-warning" role="alert">
			  		{{ $mensaje }}
			 	</div>
			  @endif
			  
			  
		   	  <hr/>
		   </form>
		   
		   <form method="get" accept-charset="utf-8">
		   		<a class="btn btn-primary btn-lg btn-block" href="{{ route('MCJD.Contratacion.Load', $progra->SubPartida) }}" role="button">Agregar</a>
		   		<hr/>
		   			<!---->
		   		<table class="table table-striped">
			    <tr>
				  <td><strong>SubPartida</strong></td>
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
					  	<a href="{{ route('MCJD.Contratacion.edit',  $Contrato->id) }}" type="button" class="btn btn-primary">Modificar</a>
					  	<a href="{{ route('MCJD.Contratacion.destroy',  $Contrato->id) }}" type="button" class="btn btn-primary">Eliminar</a>
					  </td>
					</tr>
				@endforeach
			  </table>
			  
			</form>
		   
		  </div>
		</div>
	</div>
@endsection