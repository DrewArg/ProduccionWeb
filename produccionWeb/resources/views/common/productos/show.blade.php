@extends('common.layouts.layout')
@section('contents')

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
                                    <ul>
                                        <li>Autor: {{$producto->autor}}</li>
                                        <li>Editorial: {{$producto->editorial}}</li>
                                        <li>Género: {{$producto->genero}}</li>
                                    </ul>
                                </div>



                                <div class="col-6 mb-3 d-flex justify-content-center">

                                <a href="" class="btn bg-info align-self-end">Agregar al Carrito</a>  

                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
