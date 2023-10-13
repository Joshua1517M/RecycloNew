<!doctype html>
<html lang="es">
<!-- {{ str_replace('_', '-', app()->getLocale()) }} -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema Recyclo</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Icon Styles -->
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <!--Jquiery para el scrip del autocerrado de las alertas-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <div id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark " style="background-color: #228B22;">
            <div class="container">
                <a class="sombra-logo padding-right-1" href="" id="">
                    <img src="{{ asset('img/recyclo-logo.png') }}" alt="logo" width="50" height="50">
                </a>
                <a class="navbar-brand" href="{{ url('/') }}" style="padding-left: 05px;">
                    Sistema Recyclo
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">{{ __('Inicio') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/first_steps') }}">{{ __('Primeros Pasos') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/community') }}">{{ __('Comunidad') }}</a>
                        </li>
                        <!--Verifica si cuenta con un rol y  muestra el campo-->
                        @canany(['ver-rol','crear-rol','editar-rol','borrar-rol','ver-usuario','crear-usuario','editar-usuario','borrar-usuario',])
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">{{ __('Usuarios y Roles') }}</a>
                        </li>
                        @endcanany

                        <!--
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/empleado') }}">{{ __('Usuarios') }}</a>
                        </li>-->
                        <!--Verifica si está logueado y muestra el campo-->
                        
                        <!--@if (Auth()->check())
                        @if (Route::has('register'))
                        @endif
                        @endif-->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                        </li>
                        @endif
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Pie de página -->
    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="{{ asset('img/recyclo-logo.png') }}" alt="">
                </div>
                <div class="terms">
                    <h3>Recyclo</h3>
                </div>
            </div>
            <div class="box__footer">
                <h2>Informate</h2>
                <a href="#">Quiénes Somos</a>
                <a href="#">Preguntas Frecuentes</a>
                <a href="#">Condiciones de Uso</a>
                <a href="#">Acerca de Nosotros</a>
            </div>

            <div class="box__footer">
                <h2>Contactanos</h2>
                <a href="#">Email</a>
                <a href="#">Teléfono</a>
            </div>

            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
            </div>

        </div>


        <div class="grupo2">
            <small>&copy; 2022 <b>Recyclo</b> - Todos los Derechos Reservados</small>
        </div>
    </footer>


    <!--
    <footer class="pie-pagina">
        <div class="grupo1">
            <div class="box">
                <div class="logo">
                        <img src="{{ asset('img/recyclo-logo.png') }}" alt="logo" class="imagen-logo">
                </div>
                <div class="tnombre">
                        <h2>Recyclo</h2>
                </div>
            </div>
            <div class="box">
            <h2>SOLUCIONES</h2>
                <a href="#">Contactanos</a>
                <a href="#">Preguntas Frecuentes</a>
                <a href="#">Acerca de Nosotros</a>
            </div>
            <div class="box">
                <h2>NUESTRAS REDES SOCIALES</h2>
                <div class="redes-sociales">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                </div>
            </div>
        </div>
        <div class="grupo2">
            <small>&copy; 2022 <b>Recyclo</b> - Todos los Drechos Reservados</small>
        </div>
    </footer>-->

</body>
<!--
<div class="imagen">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#7CFC00" fill-opacity="1" d="M0,96L40,128C80,160,160,224,240,245.3C320,267,400,245,480,208C560,171,640,117,720,122.7C800,
            128,880,192,960,218.7C1040,245,1120,235,1200,197.3C1280,160,1360,96,1400,64L1440,32L1440,320L1400,
            320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,
            480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
    </svg>
</div>
-->

<!-- Animacion para alertas -->
<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
    });
}, 5000);
</script>

</html>