<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BookZone') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])

</head>

<body>

<header class="mb-5 fixed-top nav__global">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">

            <a class="navbar-brand fs-1 text-center" href="/">Book Zone</a>


            <div class="">

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar producto..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Inicio</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                Productos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{URL::route('productos.index')}}">Todos los
                                        productos</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/faq.php">FAQ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/contacto.php">Contacto</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/quienes_somos.php">Quienes somos?</a>
                        </li>

                    </ul>

                </div>


            </div>


            <div class="align-item-center">
                @guest

                    <p class="">

                        @if (Route::has('register'))
                            <a class="nav-link d-inline"
                               href="{{ URL::route('register') }}">{{ __('Crear cuenta') }}</a>
                        @endif

                        <span>|</span>

                        @if (Route::has('login'))
                            <a class="nav-link d-inline" href="{{ URL::route('login') }}">{{ __('Iniciar sesión') }}</a>
                        @endif


                    </p>

                @else

                    <ul>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ URL::route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ URL::route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>


                    </ul>

                @endguest


                <div class="d-flex justify-content-center">

                    <a href="../pages/carrito.php" class="nav-link"><i class="fa-solid fa-cart-plus fa-2x"></i></a>

                </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>

</header>


<main class="margin__top container">
    @yield('contents')
</main>

<!-- Font Awesome  -->
<script src="https://kit.fontawesome.com/60be70fbe4.js" crossorigin="anonymous"></script>

</body>
</html>
