@extends('layouts.layout')
@section('content')

    <article>
        <section>
            <div class="card my-3 container py-2">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{$producto->imagen}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body row">
                            <div class="row">
                                <div class="col-6 mb-3">

                                    <h5 class="card-title">{{$producto->titulo}}</h5>
                                    <p class="card-text">{{$producto->sinopsis}}</p>
                                </div>
                                <div class="col-6 mb-3">

                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected>Formato</option>
                                        <option value="1">Fisico</option>
                                        <option value="2">Digital</option>
                                    </select>

                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Cantidad</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>

                                </div>
                                <div class="col-6 mb-3">

                                    <hr>
                                    <h3>Detalle</h3>

                                    <span>Autor: {{$producto->autor}}</span>
                                    <span>Editorial: {{$producto->editorial}}</span>
                                    <span>Genero: {{$producto->genero}}</span>
                                </div>
                                <div class="col-12 mb-3">
                                    <hr>
                                    <h3>Reviews</h3>
                                    <div class="card mb-3">
                                        <div class="card-header">
                                            Quote
                                        </div>
                                        <div class="card-body">
                                            <blockquote class="blockquote mb-0">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                <footer class="blockquote-footer">Un usuario <cite title="Source Title">NombreUsuario</cite></footer>
                                            </blockquote>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header">
                                            Quote
                                        </div>
                                        <div class="card-body">
                                            <blockquote class="blockquote mb-0">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                <footer class="blockquote-footer">Un usuario <cite title="Source Title">NombreUsuario</cite></footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
