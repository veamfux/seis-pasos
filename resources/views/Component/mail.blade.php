<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Chiapas')|Programa diabetes</title>
    <link rel="stylesheet" href="{{ asset('iconfont/material-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>

<nav id="menu" class="navbar navbar-expand-md navbar-dark fondo fixed-top">
        <a class="navbar-brand" href="{{ url('/') }}">Seis pasos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            @guest
                
                @else
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ url('../admin/Formatos/Reporte_mensual(A14)') }}">Registro A14</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ url('../admin/Formatos/Reporte_mensual(A15)') }}">Registro A15</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ url('../admin/Formatos/Reporte_mensual(A16)') }}">Registro A16</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ url('../admin/Formatos/Reporte_mensual(A18)') }}">Registro A18</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Usuario
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ url('../admin/Consulta/usuario') }}">Registro general</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ url('../admin/Formatos/Usuario') }}">Nuevo registro</a>
                </div>
            </li>
            <!--sesion-->
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        Cerrar sesión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
            @endguest
            <!--fin de sesion-->
            </ul>
        </div>
</nav>


<section>
    @yield('content')
</section>

<script src="{{ ('/js/jquery.js') }}"></script>
<script src="{{ ('/js/bootstrap.js') }}"></script>
<script>
    $(window).scroll(function() {
            if ($("#menu").offset().top > 56) {
                $("#menu").addClass("bg-primary");
            }else {
                $("#menu").removeClass("bg-primary");
            }
        });
</script>
</body>
</html>