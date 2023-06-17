@extends('layouts.layout')
@section('content')

<h1>Productos</h1>

<article>
    <section>
        @foreach($productos as $prod)

            <div class="card mb-3" style="max-width: 1400px;">
                <div class="row g-0">
                    <div class="col-md-2 productos__section__cards__img">
                        <img src="{{$prod->imagen}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body d-flex productos__section__cards">
                            <div class="productos__section__cards__p1">
                                <h5 class="">{{$prod->titulo}}</h5>

                                <div>
                                    <p>Lenguaje: {{$prod->lenguaje}}</p>
                                    <p>Genero: {{$prod->genero}}</p>
                                    <p>Autor: {{$prod->autor}}</p>
                                    <p>Precio: {{$prod->precio}}</p>
                                </div>

                            </div>
                            <div class="productos__section__cards__p2">
                                <h5 class="card-title">Sinopsis</h5>
                                <p class="card-text">{{$prod->sinopsis}}</p>
                                <div class="d-flex justify-content-center ">
                                    <a href="/paginas/detalle-producto/detalleProducto.html" class="btn btn-warning">Ver
                                        mas</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


        @endforeach

{{--        --}}


{{--        <div class="card mb-3" style="max-width: 1400px;">--}}
{{--            <div class="row g-0">--}}
{{--                <div class="col-md-2 productos__section__cards__img">--}}
{{--                    <img src="../../public/imagenes/Libro2.jpg" class="img-fluid rounded-start" alt="...">--}}
{{--                </div>--}}
{{--                <div class="col-md-10">--}}
{{--                    <div class="card-body d-flex productos__section__cards">--}}
{{--                        <div class="productos__section__cards__p1">--}}
{{--                            <h5 class="">Titulo de libro</h5>--}}

{{--                            <div>--}}
{{--                                <p>Lenguaje: Español/ingles</p>--}}
{{--                                <p>Genero: Policial</p>--}}
{{--                                <p>Autor: Agatha Christie</p>--}}
{{--                                <p>Precio: 39,99$</p>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <div class="productos__section__cards__p2">--}}
{{--                            <h5 class="card-title">Sinopsis</h5>--}}
{{--                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo--}}
{{--                                veniam dignissimos aspernatur--}}
{{--                                esse accusamus eaque repudiandae consequuntur voluptas delectus saepe. Beatae harum--}}
{{--                                architecto blanditiis--}}
{{--                                accusantium ut nulla, ullam doloremque. Earum. Lorem ipsum dolor sit amet--}}
{{--                                consectetur adipisicing elit. Nemo veniam dignissimos aspernatur--}}
{{--                                esse accusamus eaque repudiandae consequuntur voluptas delectus saepe. Beatae harum--}}
{{--                                architecto blanditiis--}}
{{--                                accusantium ut nulla, ullam doloremque. Earum.--}}
{{--                                accusantium ut nulla, ullam doloremque. Earum. Lorem ipsum dolor sit amet--}}
{{--                                consectetur adipisicing elit. Nemo veniam dignissimos aspernatur--}}
{{--                                esse accusamus eaque repudiandae consequuntur voluptas delectus saepe. Beatae harum--}}
{{--                                architecto blanditiis--}}
{{--                                accusantium ut nulla, ullam doloremque. Earum.--}}
{{--                            </p>--}}
{{--                            <div class="d-flex justify-content-center ">--}}
{{--                                <a href="/paginas/detalle-producto/detalleProducto.html" class="btn btn-warning">Ver--}}
{{--                                    mas</a>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="card mb-3" style="max-width: 1400px;">--}}
{{--            <div class="row g-0">--}}
{{--                <div class="col-md-2 productos__section__cards__img">--}}
{{--                    <img src="../../public/imagenes/Libro2.jpg" class="img-fluid rounded-start" alt="...">--}}
{{--                </div>--}}
{{--                <div class="col-md-10">--}}
{{--                    <div class="card-body d-flex productos__section__cards">--}}
{{--                        <div class="productos__section__cards__p1">--}}
{{--                            <h5 class="">Titulo de libro</h5>--}}

{{--                            <div>--}}
{{--                                <p>Lenguaje: Español/ingles</p>--}}
{{--                                <p>Genero: Policial</p>--}}
{{--                                <p>Autor: Agatha Christie</p>--}}
{{--                                <p>Precio: 39,99$</p>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <div class="productos__section__cards__p2">--}}
{{--                            <h5 class="card-title">Sinopsis</h5>--}}
{{--                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo--}}
{{--                                veniam dignissimos aspernatur--}}
{{--                                esse accusamus eaque repudiandae consequuntur voluptas delectus saepe. Beatae harum--}}
{{--                                architecto blanditiis--}}
{{--                                accusantium ut nulla, ullam doloremque. Earum. Lorem ipsum dolor sit amet--}}
{{--                                consectetur adipisicing elit. Nemo veniam dignissimos aspernatur--}}
{{--                                esse accusamus eaque repudiandae consequuntur voluptas delectus saepe. Beatae harum--}}
{{--                                architecto blanditiis--}}
{{--                                accusantium ut nulla, ullam doloremque. Earum.--}}
{{--                                accusantium ut nulla, ullam doloremque. Earum. Lorem ipsum dolor sit amet--}}
{{--                                consectetur adipisicing elit. Nemo veniam dignissimos aspernatur--}}
{{--                                esse accusamus eaque repudiandae consequuntur voluptas delectus saepe. Beatae harum--}}
{{--                                architecto blanditiis--}}
{{--                                accusantium ut nulla, ullam doloremque. Earum.--}}
{{--                            </p>--}}
{{--                            <div class="d-flex justify-content-center ">--}}
{{--                                <a href="/paginas/detalle-producto/detalleProducto.html" class="btn btn-warning">Ver--}}
{{--                                    mas</a>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="card mb-3" style="max-width: 1400px;">--}}
{{--            <div class="row g-0">--}}
{{--                <div class="col-md-2 productos__section__cards__img">--}}
{{--                    <img src="../../public/imagenes/Libro2.jpg" class="img-fluid rounded-start" alt="...">--}}
{{--                </div>--}}
{{--                <div class="col-md-10">--}}
{{--                    <div class="card-body d-flex productos__section__cards">--}}
{{--                        <div class="productos__section__cards__p1">--}}
{{--                            <h5 class="">Titulo de libro</h5>--}}

{{--                            <div>--}}
{{--                                <p>Lenguaje: Español/ingles</p>--}}
{{--                                <p>Genero: Policial</p>--}}
{{--                                <p>Autor: Agatha Christie</p>--}}
{{--                                <p>Precio: 39,99$</p>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <div class="productos__section__cards__p2">--}}
{{--                            <h5 class="card-title">Sinopsis</h5>--}}
{{--                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo--}}
{{--                                veniam dignissimos aspernatur--}}
{{--                                esse accusamus eaque repudiandae consequuntur voluptas delectus saepe. Beatae harum--}}
{{--                                architecto blanditiis--}}
{{--                                accusantium ut nulla, ullam doloremque. Earum. Lorem ipsum dolor sit amet--}}
{{--                                consectetur adipisicing elit. Nemo veniam dignissimos aspernatur--}}
{{--                                esse accusamus eaque repudiandae consequuntur voluptas delectus saepe. Beatae harum--}}
{{--                                architecto blanditiis--}}
{{--                                accusantium ut nulla, ullam doloremque. Earum.--}}
{{--                                accusantium ut nulla, ullam doloremque. Earum. Lorem ipsum dolor sit amet--}}
{{--                                consectetur adipisicing elit. Nemo veniam dignissimos aspernatur--}}
{{--                                esse accusamus eaque repudiandae consequuntur voluptas delectus saepe. Beatae harum--}}
{{--                                architecto blanditiis--}}
{{--                                accusantium ut nulla, ullam doloremque. Earum.--}}
{{--                            </p>--}}
{{--                            <div class="d-flex justify-content-center ">--}}
{{--                                <a href="/paginas/detalle-producto/detalleProducto.html" class="btn btn-warning">Ver--}}
{{--                                    mas</a>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}






    </section>


</article>
@endsection
