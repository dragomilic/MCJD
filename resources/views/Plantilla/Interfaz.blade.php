<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>@yield('title','Default')</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Fuentes de Google -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>	
	<!-- Iconos -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('plugins/css/NavBarV.css') }}"/>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}"/>
	<link rel="stylesheet" href="{{ asset('plugins/css/Posiciones.css') }}"/>
	<link rel="stylesheet" href="{{ asset('plugins/css/jquery-ui.css') }}"/>
	
	
</head>
	<!-- Encabezado -->
	<header>
		
	</header>
	<div id="name">
	  
	</div>
	<!-- Menu Vertical-->
		<div>
			@include('Menu.Nav')
		</div>
		
	@yield('pantalla')
	
	<!-- -->
	<script src="{{ asset('plugins/js/jquery.js') }}"></script>
	<script src="{{ asset('plugins/js/jquery-ui.js') }}"></script>
	<script>

	$( "#datepicker" ).datepicker({
		inline: true
	});
	
	</script>
	
</html>