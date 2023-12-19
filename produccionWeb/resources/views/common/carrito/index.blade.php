@extends('common.layouts.layout')

@section('contents')
<<<<<<< HEAD
    <div class="carrito_main">

        <div class="ticket">
            <div class="ticket-img"></div>
            <div class="ticket-table">
=======
<div class="carrito_main">
    <div class="row">
        <div class="col-md-6">
            <h2>Resumen del Carrito</h2>
            <div class="accordion" id="accordionExample">
                <!-- ... (tu código del acordeón) ... -->
            </div>
        </div>
        <div class="col-md-6">
            <h2>Productos en el Carrito</h2>
            <div class="ticket">
>>>>>>> andy
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