<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BookZone') }}</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])

</head>

<body>

    <header class="mb-5 fixed-top nav__global">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container">

                <a class="navbar-brand fs-1 text-center" href="{{URL::route('admin_index')}}">Book Zone</a>


                <div class="">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{URL::route('admin_index')}}">Inicio Administrador</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/">Sitio Web BookZone</a>
                            </li>

                        </ul>

                    </div>


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

    <script src="https://kit.fontawesome.com/60be70fbe4.js" crossorigin="anonymous"></script>

</body>

</html>