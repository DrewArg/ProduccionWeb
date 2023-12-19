@extends('common.layouts.layout')

@section('contents')
<div class="carrito_main">

    <div class="ticket">
        <div class="ticket-img"></div>
        <div class="ticket-table">

            <div class="carrito_main">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Resumen del Carrito</h2>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion carrito_main-left" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Titulo <span>Info. productos</span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic reiciendis reprehenderit, sunt
                                            sed voluptas assumenda minus quam molestias illo, nemo, velit eligendi corrupti doloribus
                                            dolor neque impedit quaerat. Fuga, doloribus.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Titulo <span>Info. productos</span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Lenguaje: Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                            <p>Género: Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                            <p>Autor: Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                            <p>Precio: Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                            <p>Fecha de Compra: Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Titulo <span>Info. productos</span>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, vitae asperiores
                                            assumenda sit sint recusandae ipsum voluptatem numquam, dolores voluptatibus totam! Nobis ad
                                            minus reiciendis id iusto sed error soluta?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Productos en el Carrito</h2>
                        <div class="ticket">

                            <table class="table table-light table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Titulo</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Valor Unitario</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @foreach ($productos as $producto)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $producto->titulo }}</td>
                                        <td>
                                            <span class="btn btn-sm btn-outline-secondary" data-producto-id="{{ $producto->id }}" data-tipo="restar">-</span>
                                            <span class="mx-2">{{ $producto->pivot->cantidad }}</span>
                                            <span class="btn btn-sm btn-outline-secondary" data-producto-id="{{ $producto->id }}" data-tipo="sumar">+</span>
                                        </td>
                                        <td>{{ $producto->precio }}</td>
                                        <td>{{ $producto->pivot->cantidad * $producto->precio }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger">Eliminar</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-end">
                                <h4>Total: <span>{{ $total }}</span></h4>
                                <button class="btn btn-primary">Pagar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection