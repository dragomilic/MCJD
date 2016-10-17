@extends('Plantilla.Interfaz')

@section('title', 'Nuevo estado')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form method="get" accept-charset="utf-8">
		   	  <a class="btn btn-primary btn-lg btn-block" href="{{ route('MCJD.RevReq.create', $progra->SubPartida) }}" role="button">Agregar</a>
		   	  <hr/>
		      <!---->
		   	  <table class="table table-striped">
			    <tr>
				  <td><strong>SubPartida</strong></td>
				  <td><strong>Analista</strong></td>
				  <td><strong>Traslado</strong></td>
				  <td><strong>Estado</strong></td>
				  <td><strong>Tramite</strong></td>
				  <td><strong>Observaciones</strong></td>
				</tr>
				
				@foreach($rev_req as $Rev_Req)
					<tr>
					  <td>{{$progra->SubPartida}}</td>
					  <td>{{$Rev_Req->Analista}}</td>
					  <td>{{$Rev_Req->Traslado}}</td>
					  <td>{{$Rev_Req->Estado}}</td>
					  <td>{{$Rev_Req->Tramite}}</td>
					  <td>{{$Rev_Req->Observaciones}}</td>
					</tr>
				@endforeach
			  </table>
			</form>
		   
		  </div>
		</div>
	</div>
@endsection