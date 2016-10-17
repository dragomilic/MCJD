@extends('Plantilla.Interfaz')

@section('title', 'Nuevo estado')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form method="get" accept-charset="utf-8">
		   	  <a class="btn btn-primary btn-lg btn-block" href="{{ route('MCJD.Legal.create', $progra->SubPartida) }}" role="button">Agregar</a>
		   	  <hr/>
		      <!---->
		   	  <table class="table table-striped">
			    <tr>
				  <td><strong>SubPartida</strong></td>
				  <td><strong>Envio a contrato, aprobacion o referendo</strong></td>
				  <td><strong>Recibido contrato aprobado</strong></td>
				</tr>
				
				@foreach($legal as $Legal)
					<tr>
					  <td>{{$Legal->SubPartida}}</td>
					  <td>{{$Legal->Envio}}</td>
					  <td>{{$Legal->Recibido}}</td>
					</tr>
				@endforeach
			  </table>
			</form>
		   
		  </div>
		</div>
	</div>
@endsection