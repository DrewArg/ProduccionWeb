
@extends('layouts.layout')

<!-- 
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
        </section> -->
@section('contents')

<div class="container">
<div class="container d-flex align-items-center mb-1">
  <hr class="flex-grow-1">
  <h2 class="text-center mx-3 fs-1">Articulos Destacados</h2>
  <hr class="flex-grow-1">
</div>


    <div id="carouselExampleAutoplaying" class="carousel slide mt-1" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="d-flex justify-content-center">
                        <div class="card" style="max-width: 800px;">
                            <div class="row g-0">
                                <div class="col-md-4 text-center p-1">
                                <img src="{{ URL::to('/') }}/imagenes/Libro2.jpg" class="img-fluid img-thumbnail" alt="...">
                                    </div>
                                        <div class="col-md-8">
                                        <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        </div>       
    </div>
    <div class="carousel-item " >


    <div class="d-flex justify-content-center">
                        <div class="card" style="max-width: 800px;">
                            <div class="row g-0">
                                <div class="col-md-4 text-center p-1">
                                <img src="{{ URL::to('/') }}/imagenes/Libro2.jpg" class="img-fluid img-thumbnail" alt="...">
                                    </div>
                                        <div class="col-md-8">
                                        <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        </div>
    </div>
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-dark rounded" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-dark rounded" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




        <!-- <section class="index__article__section2">

<div class="container mt-5">
<div class="container d-flex align-items-center mb-1">
  <hr class="flex-grow-1">
  <h2 class="text-center mx-3 fs-1">Productos</h2>
  <hr class="flex-grow-1">
</div>

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









    </article> -->




    <div class="container mt-5">
<div class="container d-flex align-items-center mb-1">
  <hr class="flex-grow-1">
  <h2 class="text-center mx-3 fs-1">Productos</h2>
  <hr class="flex-grow-1">
</div>


<div class="row row-cols-1 row-cols-md-3 g-4 mx-5">
    
  <div class="col-4">
  <a href="nav-link" style="text-decoration: none;">
    <div class="card h-100">
    <img src="{{ URL::to('/') }}/imagenes/Libro2.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title fs-1">Titulo</h5>
        <p class="card-text fs-4">$2000</p>
      </div>
    </div>
    </a>
  </div>
 
  <div class="col-4">
  <a href="nav-link" style="text-decoration: none;">
    <div class="card h-100">
    <img src="{{ URL::to('/') }}/imagenes/Libro2.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title fs-1">Titulo</h5>
        <p class="card-text fs-4">$2000</p>
      </div>
    </div>
    </a>
  </div>

  <div class="col-4">
  <a href="nav-link" style="text-decoration: none;">
    <div class="card h-100">
    <img src="{{ URL::to('/') }}/imagenes/Libro2.jpg" class="card-img-top img-fluid" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title fs-1">Titulo</h5>
        <p class="card-text fs-4">$2000</p>
      </div>
    </div>
    </a>
  </div>

  <div class="col-4">
  <a href="nav-link" style="text-decoration: none;">
    <div class="card h-100">
    <img src="{{ URL::to('/') }}/imagenes/Libro2.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title fs-1">Titulo</h5>
        <p class="card-text fs-4">$2000</p>
      </div>
    </div>
    </a>
  </div>

  <div class="col-4">
  <a href="nav-link" style="text-decoration: none;">
    <div class="card h-100">
    <img src="{{ URL::to('/') }}/imagenes/Libro2.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title fs-1">Titulo</h5>
        <p class="card-text fs-4">$2000</p>
      </div>
    </div>
    </a>
  </div>

  <div class="col-3">
  <a href="nav-link" style="text-decoration: none;">
    <div class="card h-100">
    <img src="{{ URL::to('/') }}/imagenes/Libro2.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title fs-1">Titulo</h5>
        <p class="card-text fs-4">$2000</p>
      </div>
    </div>
    </a>
  </div>



  <div class="container d-flex justify-content-center mt-3 col-12">
    <button class="btn btn-info fs-3"><a class="nav-link" href="{{ route('login') }}" >{{ __('Ver todos los productos') }}</a></button>

</div>
</div>



</div>

@endsection
