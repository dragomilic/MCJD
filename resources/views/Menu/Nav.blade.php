<ul id="accordion" class="accordion">
		<li>
			<div class="link"><i class="fa fa-code"></i>Area programación<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="{{ route('MCJD.Programa.index') }}">Lista de programas</a></li>
				<li><a href="{{ route('MCJD.EstadoPrograma.index') }}">Estado de los programas</a></li>
			</ul>
		</li>
		<li>
			<div class="link"><i class="fa fa-adjust"></i>Contrataciones<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="{{ route('MCJD.Contratacion.index') }}">Listado de contrataciones</a></li>
				<li><a href="{{ route('MCJD.Contratacion.Load') }}">Registrar contratacion</a></li>
			</ul>
		</li>
		<li>
			<div class="link"><i class="fa fa-codepen"></i>Control<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="{{ route('MCJD.Analista.index') }}">Lista de analistas</a></li>
				<li><a href="#">Procesos por analista</a></li>
			</ul>
		</li>
		<li>
			<div class="link"><i class="fa fa-bar-chart"></i>Administación<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="{{ route('MCJD.Estatus.index') }}">Estados</a></li>
				<li><a href="{{ route('MCJD.Proveedor.index') }}">Proveedor</a></li>
			</ul>
		</li>
		
	
<!-- Scripts -->
	<script src="{{ asset('plugins/js/jquery.min.js')}}" type="text/javascript" charset="utf-8"></script>
	<script src="{{ asset('plugins/js/NavBarV.js')}}" type="text/javascript" charset="utf-8"></script>