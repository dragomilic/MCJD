@extends('Plantilla.Interfaz')

@section('title', 'Modificar programa')

@section('pantalla')
	<div class="divisor">
		<div class="panel panel-default">
		  <div class="panel-body">
		   
		   @foreach($programa as $Programa)
		   <form action="#" method="get" accept-charset="utf-8">
		   	
		   	  <div class="form-group">
		   	  	<label for="LbIdentificacion">Identificacion</label>
		   	  	<input name="Identificacion" type="text" class="form-control" value={{ $Programa->SubPartida }}>
	    	  </div>
			  
			  <div class="form-group">
			  	<label for="LbNumeroSolicitud">Numero de solicitud</label>
			  	<input name="NumSolicitud" type="text" class="form-control" value={{ $Programa->Solicitud }}>
			  </div>
			  
			  <div class="form-group">
			  	<label for="LbObjetoContractualSolicitado">Objeto contractual solicitado</label>
			    <textarea name="ObjContractual" class="form-control" rows="3" value={{ $Programa->Obj_cont_soli }} ></textarea>
			  </div>
			  
			  <div class="form-group">
			  	<label for="LbMonto">Monto</label>
			    <div class="input-group">
			      <div class="input-group-addon">₡</div>
			      <input name="Monto" type="text" class="form-control" id="exampleInputAmount" value={{ $Programa->Monto }}>
			      <div class="input-group-addon">.00</div>
			    </div>
			  </div>
			  
			  <div class="form-group">
			  	<label for="LbNumeroOficioInicio">Numero de oficio inicio</label>
			    <input name="NumOficio" type="text" class="form-control" value={{ $Programa->Oficio_ini }}>
			  </div>
			  
			  <div class="form-group">
			    <label for="LbP&C">P&C</label>
			    <input name="PC" type="text" class="form-control" value={{ $Programa->PC }}>
			  </div>
			  
			  <div class="form-group">
			   <label for="">Comentario</label>
			   <textarea name="Comentario" class="form-control" placeholder="Comentario" rows="3"></textarea>
			   </div>
			  
			  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
			  
			</form>
			@endforeach
		   
		  </div>
		</div>
	</div>
@endsection