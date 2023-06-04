<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/produccionWeb/old/style.css">
    <link rel="stylesheet" href="/produccionWeb/old/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;900&display=swap" rel="stylesheet">


    <title>Libreria</title>


</head>

<body>
    <header class="nav__global">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="nav__global__container">
                        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html"><img
                                        src="public/iconos/libro-abierto.png" alt=""></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav__global__item"
                                    href="paginas/productos/Productos.html">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav__global__item" href="paginas/contacto/contacto.html">Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav__global__item" href="paginas/FAQ/FAQ.html">FAQ</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-auto mb-2 mb-lg-0  nav__global__icons d-flex">
                            <li class="nav-item">
                                <a class="nav-link" href="paginas/perfil/Perfil.html"><img src="public/iconos/usuario.png" alt=""></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="paginas/carrito/Carrito.html"><img src="public/iconos/carrito-de-compras.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    </header>


<main class="py-4">
            @yield('content')
        </main>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
