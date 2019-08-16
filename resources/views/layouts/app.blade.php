<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body style="background: url({{ asset('img/diseño-parte-grafica.png') }}) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo-completo.png') }}" alt="Logo-completo" height="48px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{ Request::is('/quienes') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/quienes') }}">
                                Quienes somos
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('/servicios') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/servicios') }}">
                                Servicios
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('/proyectosej') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/proyectosej') }}">
                                Proyectos Ejecutados
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('/proyectosde') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/proyectosde') }}">
                                Proyectos en Desarrollo
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('/contacto') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/contacto') }}">
                                Contacto
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/home" style="color: #212529 !important;">
                                    Dashboard
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @include('inc.messages')
            @yield('content')
        </main>
        <footer class="page-footer font-small" style="background-color: #3490dc;">
            <div class="container">
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    </div>
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                    </div>
                </div>
            </div>
            <div class="container text-center text-md-left mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">I&S; INGENIERIA
                        </h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>I&S; LTDA. nace en Enero del 2007 cuando un equipo de profesionales de Planta CMPC Papeles
                            Cordillera.</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">
                            Nuestro Sitio</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="{{ url('/quienes') }}" style="color: black">Quiénes Somos</a>
                        </p>
                        <p>
                            <a href="{{ url('/servicios') }}" style="color: black">Servicios</a>
                        </p>
                        <p>
                            <a href="{{ url('/proyectosej') }}" style="color: black">Projectos Ejecutados</a>
                        </p>
                        <p>
                            <a href="{{ url('/proyectosde') }}" style="color: black">Proyectos Desarrollados</a>
                        </p>
                        <p>
                            <a href="{{ url('/contacto') }}" style="color: black">Contacto</a>
                        </p>
                    </div>
                    <div class="col-md-5 col-lg-5 col-xl-4 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase font-weight-bold">Contáctenos</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fa fa-home mr-3"></i>Jose Luis Coo Nº 0754</p>
                        <p>
                            <i class="fa fa-envelope mr-3"></i>info@iysingenieria.cl</p>
                        <p>
                            <i class="fa fa-phone mr-3"></i> (56-2) 8533361 - 8726929</p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
                Vicente Vidal Alvardo.
            </div>
        </footer>
    </div>
</body>

</html>