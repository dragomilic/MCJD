@extends('Plantilla.Interfaz')

@section('title', 'Aprobacion y visado')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form method="get" accept-charset="utf-8">
		   			<a class="btn btn-primary btn-lg btn-block" href="{{ route('MCJD.AproVisa.create', $progra->SubPartida) }}"" role="button">Agregar</a>
		   	  <hr/>
		      <!---->
		   	  <table class="table table-striped">
			    <tr>
				  <td><strong>SubPartida</strong></td>
				  <td><strong>Fecha traslado a proveedor</strong></td>
				  <td><strong>Fecha traslado a oficina presupuestal</strong></td>
				  <td><strong>Fecha traslado a area de contratacion</strong></td>
				</tr>
				
				@foreach($aprovisa as $AproVisa)
					<tr>
					  <td>{{$progra->SubPartida}}</td>
					  <td>{{$AproVisa->Proveedor}}</td>
					  <td>{{$AproVisa->Ofi_Presu}}</td>
					  <td>{{$AproVisa->Area_contratacion}}</td>
					</tr>
				@endforeach
			  </table>
			</form>
		   
		  </div>
		</div>
	</div>
@endsection