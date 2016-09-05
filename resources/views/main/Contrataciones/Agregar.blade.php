@extends('Plantilla.Interfaz')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form action="{{ route('MCJD.Contratacion.store') }}" method="get" accept-charset="utf-8">
		   	
		   	  <!-- -->
		   	  <div class="form-group">
		   	  	<label for="LbReciboArea">Recibo de area</label>
		    	<input name="Identificacion" type="text" class="form-control" placeholder="Recibo de area">
	    	  </div>

	    	  <div class="form-group">
		   	  	<label for="LbNumeroTramite">Numero de tramite</label>
		    	<input name="Recibo" type="text" class="form-control" placeholder="Numero de tramite">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbApertura">Apertura</label>
		    	<input name="Apertura" type="datetime" class="form-control" placeholder="dd/mm/yyyy">
	    	  </div>
	    	  <!-- -->
	    	  	
	    	  <!-- -->
	    	  <table class="table">
			    <tr>
				  <td><strong>Analista</strong></td>
				  <td><strong>Estado actual</strong></td>
				  <td><strong>Proveedor</strong></td>
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
				  	<select name="Cod_Proveedor" class="form-control">
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
			  
			   <!-- -->
			   <hr/>
			   <label for="LbPedido">Pedido</label>
			 	  
			   <div class="form-inline">
			   	  
			   	  	<form class="form-inline">
				  	
						<div class="input-group">
						    <label for="LbDiferencia">Monto</label>
							<div class="input-group">
								<div class="input-group-addon">₡</div>
								<input name="Pedido_Monto" type="text" class="form-control" id="Contrato_Monto">
							</div>
						</div>
									  
						<div class="input-group">
							<label for="LbDiferencia">Diferencia</label>
							<div class="input-group">
								<a class="input-group-addon">₡</a>
								<input name="Pedido_Diferencia" type="text" class="form-control" id="Contrato_Diferencia">
							</div>
						</div>
						
				 </form>
			   </div>
			   <!-- -->
		   <br/>
			   <!-- -->
			   <div class="form-group">
			   		  <hr/>
					  <label for="LbPedido">Solicitud</label>
					  
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
							  	<a class="input-group-addon">₡</a>
							    <input name="Solicitud_Monto" type="text" class="form-control" id="Pedido_Monto">
						    </div>
						  </div>
						  
						  <hr />
					  </div>
			   </div>
			   <!-- -->
			   
			   <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
			   <!--
			   <a href="{{ route('MCJD.Contratacion.store') }}" class="btn btn-primary" role="button" >fdgff</a>
			   -->
		   </form>
		  </div>
	   </div>
	</div>
@endsection