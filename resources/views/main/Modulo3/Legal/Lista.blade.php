@extends('Plantilla.Interfaz')

@section('title', 'Estado de programas')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form action="{{ route('MCJD.Legal.show') }}" method="get" accept-charset="utf-8">
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
					  	<a href= "{{ route('MCJD.Legal.Load', $Programa->SubPartida) }}" class="btn btn-primary" role="button">Contrataciones</a>
					  </td>
					</tr>
				@endforeach
			  </table>
			</form>
		   
		  </div>
		</div>
	</div>
@endsection