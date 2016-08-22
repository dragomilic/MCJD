@extends('Plantilla.Interfaz')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form>
		   	  <div class="form-group">
		   	  	<label for="LbReciboArea">Recibo de area</label>
		    	<input type="text" class="form-control" placeholder="Recibo de area">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbReciboArea">Analista</label>
		    	<select class="form-control">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				</select>
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbNumeroTramite">Numero de tramite</label>
		    	<input type="text" class="form-control" placeholder="Numero de tramite">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbApertura">Apertura</label>
		    	<input type="datetime" class="form-control">
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbEstadoActual">Estado actual</label>
		    	<select class="form-control">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				</select>
	    	  </div>
	    	  
	    	  <div class="form-group">
		   	  	<label for="LbProveedor">Proveedor</label>
		    	<select class="form-control">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				</select>
	    	  </div>
			
			
		 <div class="form-group">
		 	<label for="LbPedido">Pedido</label>
			  <form class="form-inline">
			  	
			  	<div class="form-group">
					    <label for="LbNumero">Numero</label>
					    <input type="text" class="form-control" id="Pedido_Numero" placeholder="#">
					  </div>
					  
					  <div class="form-group">
					    <label for="LbFecha">Fecha</label>
					    <input type="date" class="form-control" id="Pedido_Fecha" placeholder="dd/mm/yy">
					  </div>
					  
					  <!--
			      <div class="form-group">
				    <label for="LbTotal">Total</label>
					 <div class="input-group">
					    <div class="input-group-addon">₡</div>
					    <input type="text" class="form-control" id="Contrato_Monto">
					    <div class="input-group-addon">.00</div>
					 </div>
				  </div>
						  
			      <div class="form-group">
					<label for="LbDiferencia">Diferencia</label>
					  <div class="input-group">
					     <div class="input-group-addon">₡</div>
					     <input type="text" class="form-control" id="Contrato_Diferencia">
					     <div class="input-group-addon">.00</div>
					  </div>
				  </div>
				  -->
			   </form>
		   </div>
		   <br/>
		   <div class="form-group">
				  <label for="LbPedido">Pedido</label>
		    	  <form class="form-inline">
		    	  	
		    	  	  <div class="form-group">
					    <label for="LbNumero">Numero</label>
					    <input type="text" class="form-control" id="Pedido_Numero" placeholder="#">
					  </div>
					  
					  <div class="form-group">
					    <label for="LbFecha">Fecha</label>
					    <input type="date" class="form-control" id="Pedido_Fecha" placeholder="dd/mm/yy">
					  </div>
					  
					  <div class="form-group">
					  	<label for="LbMonto">Monto</label>
					    <div class="input-group">
					      <div class="input-group-addon">₡</div>
					      <input type="text" class="form-control" id="Pedido_Monto">
					      <div class="input-group-addon">.00</div>
					    </div>
					  </div>
					  
				  </form>
		   </div>
		   </form>
		  </div>
	   </div>
	</div>
@endsection