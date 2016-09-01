@extends('Plantilla.Sesion')

@section('Login')
<form action="{{ route('MCJD.home') }}" method="get" accept-charset="utf-8">
	  
	<section class="Login">
	  <h3>Login</h3>
	  <div class="input-group input-group-sm">
		  <span class="input-group-addon" id="sizing-addon2">
		  	<span class="glyphicon glyphicon-user"></span>
		  </span>
		  <input name="Usuario" type="text" class="form-control" placeholder="Usuario" aria-describedby="sizing-addon2">
	  </div>

	  <div class="input-group input-group-sm">
		  <span class="input-group-addon" id="sizing-addon2">
		  	<span class="glyphicon glyphicon-inbox"></span>
		  </span>
		  <input name="Password"type="text" class="form-control" placeholder="Clave" aria-describedby="sizing-addon2">
	  </div>
	  <div >
	  	<p></p>
		  <button type="submit">Ingresar</button>
	  </div>
	</section>
	
	</form>
@endsection