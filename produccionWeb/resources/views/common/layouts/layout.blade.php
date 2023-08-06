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

    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])

</head>

<body>

<header class="mb-5 fixed-top nav__global">

    <div class="border-bottom">
        <div class="container d-flex justify-content-between align-items-center py-1">

            <h1 class="fs-6 align-self-center my-0">Buenos Aires | WhatsApp 011-15-11111111 | Mail
            cafemail@café.com </h1>

          
        </div>
    </div>


    <nav class="navbar navbar-expand-lg ">
        <div class="container">

            <a class="navbar-brand fs-1 text-center" href="/">Book Zone</a>


            <div class="">

                


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Inicio</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{URL::route('productos.index')}}">Productos</a>
                        </li>

                
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{URL::route('FAQ_index')}}">FAQ</a>
                        </li>

                        <li class="nav-item">
                        
                            <a class="nav-link" aria-current="page" href="{{URL::route('contacto_index')}}">Contacto</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{URL::route('quienesSomos_index')}}">¿Quienes somos?</a>
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

                    <a href="{{URL::route('carrito_index')}}" class="nav-link col-6"><i class="fa-solid fa-cart-plus fa-2x"></i></a>
                    <a href="{{URL::route('admin_index')}}" class="nav-link" >ADMIN</a>

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


<button class="btn whatsapp-icon" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover"
        data-bs-content="Contactanos por WhatsApp">
    <a class="nav-link" target="_blank" href="https://wa.me/5491111111111"><i
            class="fa-brands fa-square-whatsapp fa-4x"></i></a>
</button>


<footer class="py-3 sticky-footer nav__global mt-5">

    <div class="container">
        <div class="row d-flex justify-content-between">

            <div class="col-5 row">


                <div class="col-lg-6">


                    <h4>Contacto</h4>
                    <hr>
                    <p>
                        Whatsapp: <br>
                        011-15-11111111
                    </p>

                    <p>
                        Mail: <br>
                        mail@café.com
                    </p>


                </div>


                <div class="col-lg-6">


<h4>Navegación</h4>
<hr>

<p>

  <a href="/" class="nav-link p-0 m-0">Inicio</a>
  <a href="{{URL::route('productos.index')}}" class="nav-link p-0 m-0">Productos</a>
  <a href="{{URL::route('FAQ_index')}}" class="nav-link p-0 m-0">FAQ</a>
  <a href="{{URL::route('contacto_index')}}" class="nav-link p-0 m-0">Contacto</a>
  <a href="{{URL::route('quienesSomos_index')}}" class="nav-link p-0 m-0">Quienes Somos?</a>


</p>




</div>


            </div>


         


        </div>


    </div>


</footer>


<!-- Font Awesome  -->
<script src="https://kit.fontawesome.com/60be70fbe4.js" crossorigin="anonymous"></script>

</body>
</html>


