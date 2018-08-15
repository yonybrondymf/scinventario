<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Sistema de Control de Inventario | @yield('title')</title>
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{ asset('css/datepicker3.css')}}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png')}}"/>
    
</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default" role="navigation">
          <!-- El logotipo y el icono que despliega el menú se agrupan
               para mostrarlos mejor en los dispositivos móviles -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-ex1-collapse">
              <span class="sr-only">Desplegar navegación</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/')}}">Sistema de Control de Inventario</a>
          </div>
         
          <!-- Agrupar los enlaces de navegación, los formularios y cualquier
               otro elemento que se pueda ocultar al minimizar la barra -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{ url('home')}}"><i class="fa fa-home"></i> Inicio</a></li>
              <li class="{{ Request::is('device') ? 'active' : '' }}"><a href="{{ route('device.index')}}"><i class="fa fa-list-alt"></i> Gestionar Inventario</a></li>
              <li class="{{ Request::is('category') ? 'active' : '' }}"><a href="{{ route('category.index')}}"><i class="fa fa-tags"></i> Categorias</a></li>
              <li class="{{ Request::is('location') ? 'active' : '' }}"><a href="{{ route('location.index')}}"><i class="glyphicon glyphicon-map-marker"></i> Ubicaciones</a></li>
              @if( Auth::user()->type == "admin" )
                <li class="{{ Request::is('user') ? 'active' : '' }}"><a href="{{ route('user.index')}}"><i class="glyphicon glyphicon-map-marker"></i> Administracion del Sistema</a></li>
              @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('user.edit',Auth::user()->id) }}"><i class="fa fa-user fa-fw"></i>Perfil</a></li>
                  <li><a href="{{ url('/auth/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
        <div class="container-fluid"  style="padding:10px;">
            @yield('content')
        </div>
        
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/sb-admin.js')}}"></script>
    <script src="{{ asset('js/metisMenu.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.es.js')}}"></script>
    @yield('scripts')

</body>

</html>
