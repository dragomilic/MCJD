@extends('Plantilla.Interfaz')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form method="get" accept-charset="utf-8">
		   	
		   	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Identificacion</label>
		   	  	<input type="text" class="form-control" placeholder="Programa">
	    	  </div>
			  
			  <div class="form-group">
			  	<label for="LbNumeroSolicitud">Numero de solicitud</label>
			  	<input type="text" class="form-control" placeholder="Numero de solicitud">
			  </div>
			  
			  <div class="form-group">
			  	<label for="LbObjetoContractualDolicitado">Objeto contractual solicitado</label>
			    <textarea class="form-control" placeholder="Objeto contractual solicitado" rows="3"></textarea>
			  </div>
			  
			  <div class="form-group">
			  	<label for="LbMonto">Monto</label>
			    <div class="input-group">
			      <div class="input-group-addon">₡</div>
			      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Monto">
			      <div class="input-group-addon">.00</div>
			    </div>
			  </div>
			  
			  <div class="form-group">
			  	<label for="LbNumeroOficioInicio">Numero de oficio inicio</label>
			    <input type="text" class="form-control" placeholder="Numero de oficio inicio">
			  </div>
			  
			  <div class="form-group">
			    <label for="LbP&C">P&C</label>
			    <input type="text" class="form-control" placeholder="P&C">
			  </div>
			  
			  <button type="submit" class="btn btn-default">Guardar</button>
			  
			</form>
		   
		  </div>
		</div>
	</div>
@endsection