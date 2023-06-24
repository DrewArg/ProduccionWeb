@extends('layouts.layout')
@section('contents')

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
                                    <a href="{{URL::route('productos.show', $prod->id)}}" class="btn btn-warning">Ver
                                        mas</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


        @endforeach
    </section>


</article>
@endsection
