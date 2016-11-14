q@extends('Plantilla.Interfaz')

@section('title', 'Nueva contrataciÃ³n')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form action="{{ route('MCJD.Contratacion.store', $progra->SubPartida) }}" method="get" accept-charset="utf-8">
		   	
		   		<!-- -->
	    	  <table class="table">
			    <tr>
				  <td><strong>Recibido Área Contratación</strong></td>
				  <td><strong>Número de Trámite Contratación</strong></td>
				  <td><strong>Apertura</strong></td>
				</tr>
				
				<tr>
				  <td>
					<input name="Identificacion" type="text" class="form-control" placeholder="Recibo de area">
				  </td>
				  <td>
				  	<input name="Recibo" type="text" class="form-control" placeholder="Numero de tramite">
				  </td>
				  <td>
				  	<input name="Apertura" type="text" id="datepicker" class="form-control" placeholder="dd/mm/yyyy">
				  </td>
				</tr>
			  </table>
			  <!-- -->
		   	  <br />
	    	  <!-- -->
	    	  <table class="table">
			    <tr>
				  <td><strong>Analista de Contratación</strong></td>
				  <td><strong>Estado actual</strong></td>
				  <td><strong>Proveedor Adjudicado</strong></td>
				</tr>
				
				<tr>
				  <td>
					<select name="Analista" class="form-control">
				    	@foreach($analista as $Analista)
				    		<option>{{$Analista->Nombre}}</option>
				    	@endforeach
					</select>
				  </td>
				  <td>
				  	<select name="Cod_Estatus" class="form-control">
			  			@foreach($estatus as $Estatus)
							<option>{{$Estatus->Estado}}</option>
						@endforeach
					</select>
				  </td>
				  <td>
				  	<select name="Cod_Proveedor" class="form-control">
			    		@foreach($proveedor as $Proveedor)
							<option>{{$Proveedor->Nombre}}</option>
						@endforeach
					</select>
				  </td>
				</tr>
			  </table>
			  <!-- -->
			   <hr/>
			   
			   <div class="form-group">
			   	  
			   	  	<label for="LbPedido">Adjudicado</label>
			   	  	
			   	  	<div class="form-inline">
				  	<br />
						<div class="input-group">
						    <label for="LbDiferencia">Monto</label>
							<div class="input-group">
								<div class="input-group-addon">â‚¡</div>
								<input name="Adjudicado_Monto" type="text" class="form-control" id="Contrato_Monto">
							</div>
						</div>
									  
						<div class="input-group">
							<label for="LbDiferencia">Diferencia</label>
							<div class="input-group">
								<a class="input-group-addon">â‚¡</a>
								<input name="Adjudicado_Diferencia" type="text" class="form-control" id="Contrato_Diferencia">
							</div>
						</div>
						
				 	</div>
			   </div>
			   <!-- -->
		       <br/>
			   <!-- -->
			   <div class="form-group">
			   		  
					  <label for="LbPedido">Pedido</label>
					  
			    	  <div class="form-inline">
			    	  	
				    	  <div class="form-group">
							<label for="LbNumero">Numero</label>
							<input name="Solicitud_Numero" type="text" class="form-control" id="Pedido_Numero" placeholder="#">
						  </div>
							  
						  <div class="form-group">
						    <label for="LbFecha">Fecha</label>
						    <input name="Solicitud_Fecha" type="date" class="form-control" id="Pedido_Fecha" placeholder="dd/mm/yy">
						  </div>
							  
						  <div class="input-group">
						  	<label for="LbMonto">Monto</label>
						 	<div class="input-group">
							  	<a class="input-group-addon">â‚¡</a>
							    <input name="Solicitud_Monto" type="text" class="form-control" id="Pedido_Monto">
						    </div>
						  </div>
						  
					  </div>
			   </div>
			   <!-- -->
			   
			   <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
			  
		   </form>
		  </div>
	   </div>
	</div>
	
	
@endsection