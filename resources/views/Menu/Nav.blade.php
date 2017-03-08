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
				<li><a href="{{ route('MCJD.Contratacion.index2') }}">Estado de contrataciones</a></li>
			</ul>
		</li>
		<li>
			<div class="link"><i class="fa fa-codepen"></i>Legal<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="{{ route('MCJD.Legal.index') }}">Area legal</a></li>
			</ul>
		</li>
		<li>
			<div class="link"><i class="fa fa-bar-chart"></i>Administación<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="{{ route('MCJD.Analista.index') }}">Analistas</a></li>
				<li><a href="{{ route('MCJD.Estatus.index') }}">Estados</a></li>
				<li><a href="{{ route('MCJD.Proveedor.index') }}">Proveedor</a></li>
			</ul>
		</li>
		
		<li>
			<div class="link"><i class="fa fa-newspaper-o"></i>Reportes<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="{{ route('MCJD.Reportes.TiemposContrataciones') }}">Tiempos contrataciones</a></li>
				<li><a href="{{ route('MCJD.Reportes.EstadisticasInterventores') }}">Estadisticas de interventores</a></li>
				<li><a href="{{ route('MCJD.Reportes.PromedioContratacion') }}">Promedio de contratacion</a></li>
			</ul>
		</li>
		
	
<!-- Scripts -->
	<script src="{{ asset('plugins/js/jquery.min.js')}}" type="text/javascript" charset="utf-8"></script>
	<script src="{{ asset('plugins/js/NavBarV.js')}}" type="text/javascript" charset="utf-8"></script>