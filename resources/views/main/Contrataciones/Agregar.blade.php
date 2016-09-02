@extends('Plantilla.Interfaz')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form>
		   	
		   	  <!-- -->
		   	  <div class="form-group">
		   	  	<label for="LbReciboArea">Recibo de area</label>
		    	<input type="text" class="form-control" placeholder="Recibo de area">
	    	  </div>

	    	  <div class="form-group">
		   	  	<label for="LbNumeroTramite">Numero de tramite</label>
		    	<input type="text" class="form-control" placeholder="Numero de tramite">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbApertura">Apertura</label>
		    	<input type="datetime" class="form-control" placeholder="dd/mm/yyyy">
	    	  </div>
	    	  <!-- -->
	    	  	
	    	  <!-- -->
	    	  <div class="form-inline">
	    	  	  <!-- -->
		    	  <div class="form-group">
		    	  	<div class="col-xl-12">
			   	  	<label for="LbReciboArea">Analista</label>
			   	  		<select class="form-control">
				    		@foreach($analista as $Analista)
				    			<option>{{$Analista->Nombre}}</option>
				    		@endforeach
						</select>
			   	  	</div>
		    	  </div>
	    	  	  <!-- -->
			      <div class="form-group">
			   	  	<label for="LbEstadoActual">Estado actual</label>
			    	<select class="form-control input-sm">
			  			@foreach($estatus as $Estatus)
							<option>{{$Estatus->Estado}}</option>
						@endforeach
					</select>
			   	  </div>
			      <!-- -->
			      <div class="form-group">
			   	  	<label for="LbProveedor">Proveedor</label>
			    	<select class="form-control input-sm">
			    		@foreach($estatus as $Estatus)
							<option>{{$Estatus->Estado}}</option>
						@endforeach
					</select>
			  	  </div>
			   </div>
		  	   <!-- -->
		  	 
			   <!-- -->
			   <div class="form-inline">
			 	  <label for="LbPedido">Pedido</label>
			 	  <hr/>
				      <form class="form-inline">
						<div class="input-group">
						    <label for="LbDiferencia">Monto</label>
							<div class="input-group">
								<div class="input-group-addon">₡</div>
								<input type="text" class="form-control" id="Contrato_Monto">
							</div>
						</div>
									  
						<div class="input-group">
							<label for="LbDiferencia">Diferencia</label>
							<div class="input-group">
								<a class="input-group-addon">₡</a>
								<input type="text" class="form-control" id="Contrato_Diferencia">
							</div>
						</div>
					  </form>
			   </div>
			   <!-- -->
		   <br/>
			   <!-- -->
			   <div class="form-group">
					  <label for="LbPedido">Pedido</label>
					  <hr/>
			    	  <form class="form-inline">
			    	  	
			    	  	  <div class="form-group">
						    <label for="LbNumero">Numero</label>
						    <input type="text" class="form-control" id="Pedido_Numero" placeholder="#">
						  </div>
						  
						  <div class="form-group">
						    <label for="LbFecha">Fecha</label>
						    <input type="date" class="form-control" id="Pedido_Fecha" placeholder="dd/mm/yy">
						  </div>
						  
						  <div class="input-group">
						  	<label for="LbMonto">Monto</label>
						  	<div class="input-group">
							  	<a class="input-group-addon">₡</a>
							    <input type="text" class="form-control" id="Pedido_Monto">
						    </div>
						  </div>
						  
						  <hr />
						  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
				  	  
					  </form>
			   </div>
			   <!-- -->
		   </form>
		  </div>
	   </div>
	</div>
@endsection