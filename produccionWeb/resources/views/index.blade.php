
@extends('layouts.layout')
@section('content')

    <article class="index__article">
        <section class="index__article__section1">
            <h2 class="display-5 index__article__section1__titulo">Articulos destacados</h2>
            <div class="index__carousel">

                <div id="carouselExample" class="carousel slide index__carousel__in container">
                    <div class="carousel-inner">
                        <div class="carousel-item active index__carousel__card">
                            <div class="card mb-3" style="max-width: 600px; min-width: 600px">
                                <div class="row g-0">
                                    <div class="col-md-4 index__carousel__card__img">
                                        <img src="{{ URL::to('/') }}/imagenes/Libro2.jpg" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural
                                                lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-body-secondary">Ultima actualizacion
                                                    hace 3 mins
                                                </small></p>
                                            <div class="d-flex justify-content-center ">
                                                <a href="" class="btn btn-warning">Ver
                                                    mas</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item index__carousel__card">
                            <div class="card mb-3" style="max-width: 600px; min-width: 600px">
                                <div class="row g-0">
                                    <div class="col-md-4 index__carousel__card__img">
                                        <img src="{{ URL::to('/') }}/imagenes/Libro2.jpg" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural
                                                lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-body-secondary">Ultima actualizacion
                                                    hace 3 mins
                                                </small></p>
                                            <div class="d-flex justify-content-center ">
                                                <a href="" class="btn btn-warning">Ver
                                                    mas</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item index__carousel__card">
                            <div class="card mb-3" style="max-width: 600px; min-width: 600px">
                                <div class="row g-0">
                                    <div class="col-md-4 index__carousel__card__img">
                                        <img src="{{ URL::to('/') }}/imagenes/Libro2.jpg'" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">HOLA MANOLA</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural
                                                lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-body-secondary">Ultima actualizacion
                                                    hace 3 mins
                                                </small></p>
                                            <div class="d-flex justify-content-center ">
                                                <a href="" class="btn btn-warning">Ver
                                                    mas</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <section class="index__article__section2">

            <h2 class="display-5"> Productos </h2>

            <div class="card-group card index__article__section2__c-group">





                <div class="d-flex justify-content-center index__article__section2__card">
                    <div class="card" style="width: 20rem;">
                        <img src="{{ URL::to('/') }}/imagenes/Libro2.jpg" class="card-img-top" alt="mapa_avatar">
                        <div class="card-body">
                            <h5 class="card-title display-5 text-center">Nombre libro</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                            <div class="d-flex justify-content-center ">
                                <a href="" class="btn btn-warning">Ver
                                    mas</a>
                            </div>
                        </div>
                    </div>
                </div>






                <div class="d-flex justify-content-center index__article__section2__card">
                    <div class="card" style="width: 20rem;">
                        <img src="{{ URL::to('/') }}/imagenes/Libro2.jpg" class="card-img-top" alt="mapa_avatar">
                        <div class="card-body">
                            <h5 class="card-title display-5 text-center">Nombre libro</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                            <div class="d-flex justify-content-center ">
                                <a href="" class="btn btn-warning">Ver
                                    mas</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center index__article__section2__card">
                    <div class="card" style="width: 20rem;">
                        <img src="{{ URL::to('/') }}/imagenes/Libro2.jpg" class="card-img-top" alt="mapa_avatar">
                        <div class="card-body">
                            <h5 class="card-title display-5 text-center">Nombre libro</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                            <div class="d-flex justify-content-center ">
                                <a href="" class="btn btn-warning">Ver
                                    mas</a>
                            </div>
                        </div>
                    </div>
                </div>







                <div class="d-flex justify-content-center index__article__section2__card">
                    <div class="card" style="width: 20rem;">
                        <img src="{{ URL::to('/') }}/imagenes/Libro2.jpg" class="card-img-top" alt="mapa_avatar">
                        <div class="card-body">
                            <h5 class="card-title display-5 text-center">Nombre libro</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                            <div class="d-flex justify-content-center ">
                                <a href="" class="btn btn-warning">Ver
                                    mas</a>
                            </div>
                        </div>
                    </div>
                </div>






                <div class="d-flex justify-content-center index__article__section2__card">
                    <div class="card" style="width: 20rem;">
                        <img src="{{ URL::to('/') }}/imagenes/Libro2.jpg" class="card-img-top" alt="mapa_avatar">
                        <div class="card-body">
                            <h5 class="card-title display-5 text-center">Nombre libro</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                            <div class="d-flex justify-content-center ">
                                <a href="" class="btn btn-warning">Ver
                                    mas</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center index__article__section2__card">
                    <div class="card" style="width: 20rem;">
                        <img src="{{ URL::to('/') }}/imagenes/Libro2.jpg" class="card-img-top" alt="mapa_avatar">
                        <div class="card-body">
                            <h5 class="card-title display-5 text-center">Nombre libro</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                            <div class="d-flex justify-content-center ">
                                <a href="" class="btn btn-warning">Ver
                                    mas</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>









    </article>

@endsection
