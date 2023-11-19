@extends('common.layouts.layout')

@section('contents')
    <div class="carrito_main">

        <div class="ticket">
            <div class="ticket-img"></div>
            <div class="ticket-table">
                <table class="table table-light table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Valor Unitario</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    @foreach ($productos as $producto)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $producto->titulo }}</td>
                            <td><span>-</span> 1 <span>+</span></td>
                            <td>{{ $producto->precio }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
