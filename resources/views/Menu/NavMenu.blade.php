<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-code"></i>Area programación<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('MCJD.Programa.index') }}">Lista de programas</a></li>
            <li><a href="{{ route('MCJD.EstadoPrograma.index') }}">Estado de los programas</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-adjust"></i>Contrataciones <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="{{ route('MCJD.Contratacion.index2') }}">Estado de contrataciones</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-codepen"></i>Legal <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="{{ route('MCJD.Legal.index') }}">Area legal</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bar-chart"></i>Administación <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="{{ route('MCJD.Analista.index') }}">Analistas</a></li>
              <li><a href="{{ route('MCJD.Estatus.index') }}">Estados</a></li>
              <li><a href="{{ route('MCJD.Proveedor.index') }}">Proveedor</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-newspaper-o"></i>Reportes <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="{{ route('MCJD.Reportes.TiemposContrataciones') }}">Tiempos contrataciones</a></li>
              <li><a href="{{ route('MCJD.Reportes.EstadisticasInterventores') }}">Estadisticas de interventores</a></li>
              <li><a href="{{ route('MCJD.Reportes.PromedioContratacion') }}">Promedio de contratacion</a></li>
          </ul>
        </li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>