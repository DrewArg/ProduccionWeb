@extends('common.layouts.layout')

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
                                    <a href="{{URL::route('productos.show',$caratula->id)}}"
                                       style="text-decoration: none;">
                                        <img src="{{$caratula->imagen}}" class="img-fluid img-thumbnail"
                                             alt="...">
                                    </a>
                                </div>

                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$caratula->titulo}}</h5>
                                        <p class="card-text">{{$caratula->sinopsis}}</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @foreach($productos as $prod)
                    <div class="carousel-item ">

                        <div class="d-flex justify-content-center">
                            <div class="card" style="max-width: 800px;">
                                <div class="row g-0">
                                    <div class="col-md-4 text-center p-1">
                                        <a href="{{URL::route('productos.show',$prod->id)}}"
                                           style="text-decoration: none;">
                                            <img src="{{$prod->imagen}}"
                                                 class="img-fluid img-thumbnail"
                                                 alt="...">
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$prod->titulo}}</h5>
                                            <p class="card-text">{{$prod->sinopsis}}</p>
                                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                                    ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container mt-5">
            <div class="container d-flex align-items-center mb-1">
                <hr class="flex-grow-1">
                <h2 class="text-center mx-3 fs-1">Productos</h2>
                <hr class="flex-grow-1">
            </div>


            <div class="row row-cols-1 row-cols-md-3 g-4 mx-5">
                @foreach($productos as $prod)

                    <div class="col-4">
                        <a href="nav-link" style="text-decoration: none;">
                            <div class="card h-100">
                                <a href="{{URL::route('productos.show',$prod->id)}}" style="text-decoration: none;">
                                    <img src="{{$prod->imagen}}" class="img-fluid rounded-start" alt="...">
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{$prod->titulo}}</h5>
                                    <p>$ {{$prod->precio}}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                @endforeach
                <div class="col-4 d-flex container  mt-3 col-12 justify-content-center">

                   
                        <button class="btn btn-info fs-3 justify-content-center"><a class="nav-link"
                                                             href="{{ URL::route('productos.index') }}">{{ __('Ver todos los productos') }}</a>
                        </button>

                  
                </div>


            </div>

@endsection
