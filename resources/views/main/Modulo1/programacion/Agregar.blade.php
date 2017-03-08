@extends('Plantilla.Interfaz')

@section('title', 'Nuevo programa')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   <form action="{{ route('MCJD.Programa.store') }}" method="get" accept-charset="utf-8">
		   	
		   	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Codigo</label>
		   	  	<input name="Codigo" type="text" class="form-control" placeholder="Programa">
	    	  </div>
	    	  
		   	  <div class="form-group">
		   	  	<label for="LbIdentificacion">SubPartida</label>
		   	  	<input name="SubPartida" type="text" class="form-control" placeholder="Programa">
	    	  </div>
			  
			  <div class="form-group">
			  	<label for="LbNumeroSolicitud">Numero de solicitud</label>
			  	<input name="NumSolicitud" type="text" class="form-control" placeholder="Numero de solicitud">
			  </div>
			  
			  <div class="form-group">
			  	<label for="LbObjetoContractualSolicitado">Objeto contractual solicitado</label>
			    <textarea name="ObjContractual" class="form-control" placeholder="Objeto contractual solicitado" rows="3"></textarea>
			  </div>
			  
			  <!---->
		   	  <table class="table table-striped">
			    <tr>
				  <td><strong>Monto</strong></td>
				  <td><strong>Numero de oficio inicio</strong></td>
				  <td><strong>Fecha de recibo en P&C</strong></td>
				</tr>
				
				<tr>
				  <td>
				  	<div class="input-group">
				      <div class="input-group-addon">₡</div>
				      <input name="Monto" type="text" class="form-control" id="exampleInputAmount" placeholder="Monto">
				    </div>
				  </td>
				  <td>
				  	<input name="NumOficio" type="text" class="form-control" placeholder="Numero de oficio inicio">
				  </td>
				  <td>
				  	<input name="PC" id="datepicker" type="text" class="form-control" placeholder="">
				  </td>
				</tr>
			   </table>
			   
			   <div class="form-group">
			   <label for="">Comentario</label>
			   <textarea name="Comentario" class="form-control" placeholder="Comentario" rows="3"></textarea>
			   </div>
			   
			  <hr/>
			  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
			  
			</form>
		   
		  </div>
		</div>
	</div>
@endsection