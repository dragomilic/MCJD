<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Login</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}"/>
	<link rel="stylesheet" href="{{ asset('plugins/css/Posiciones.css') }}"/>
</head>
<body>
	<form action="{{route ('MCJD.home')}}" method="get" accept-charset="utf-8">
	  
	<section class="Login">
	  <h3>Login</h3>
	  <div class="input-group input-group-sm">
		  <span class="input-group-addon" id="sizing-addon2">
		  	<span class="glyphicon glyphicon-user"></span>
		  </span>
		  <input type="text" class="form-control" placeholder="Usuario" aria-describedby="sizing-addon2">
	  </div>
	  <div class="input-group input-group-sm">
		  <span class="input-group-addon" id="sizing-addon2">
		  	<span class="glyphicon glyphicon-inbox"></span>
		  </span>
		  <input type="text" class="form-control" placeholder="Clave" aria-describedby="sizing-addon2">
	  </div>
	  <div >
	  	<p></p>
		  <button type="submit">Ingresar</button>
	  </div>
	</section>
	
	</form>
</body>
</html>