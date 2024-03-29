<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BookZone') }}</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])

</head>

<body>

    <header class="mb-5 fixed-top nav__global">

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


                <div class="d-flex justify-content-center">
                    @guest
                    <a class="nav-link px-3" href="{{ URL::route('login') }}"><i class="fa-solid fa-right-to-bracket"></i></a>
                    <a href="{{URL::route('carrito_index')}}" class="nav-link col-6"><i class="fa-solid fa-cart-plus fa-2x"></i></a>
                @else
                    <a class="dropdown-item" href="{{ URL::route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">                                              
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    <a href="{{URL::route('carrito_index')}}" class="nav-link col-6 d-flex justify-content-center"><i class="fa-solid fa-cart-plus fa-2x align-self-center"></i></a>





                    @if(auth()->user()->tipo_usuario === 1)
                    <a href="{{ route('admin_index') }}" class="nav-link">ADMIN</a>
                    @else
                    <p class="fs-6">{{ auth()->user()->nombre }}</p>
                    @endif

                    @endguest



                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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