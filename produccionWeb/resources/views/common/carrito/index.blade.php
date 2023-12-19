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
                                @foreach ($productos as $producto)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $producto->id }}" aria-expanded="true" aria-controls="collapse{{ $producto->id }}">
                                                {{ $producto->titulo }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $producto->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="d-flex">
                                                    <img src="{{ $producto->imagen }}" alt="{{ $producto->titulo }}" style="max-width: 200px; height: auto; margin-right: 10px;">
                                                    <div>
                                                        <p><span  class="fw-bold">Sinopsis: </span>{{ $producto->sinopsis }}</p>
                                                        <p><span class="fw-bold">Autor:</span> {{ $producto->autor }}</p>
                                                        <p><span class="fw-bold">Género:</span> {{ $producto->genero }}</p>
                                                        <p><span class="fw-bold">Editorial:</span> {{ $producto->editorial }}</p>
                                                        <p><span class="fw-bold">Tipo de producto:</span> {{ $producto->tipo_producto }}</p>
                                                        <p><span class="fw-bold">Lenguaje:</span> {{ $producto->lenguaje }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
                                                <form id="eliminar-form-{{ $producto->id }}" class="eliminar-form" data-producto-id="{{ $producto->id }}" action="{{ route('carrito-producto.eliminar', ['id' => $producto->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger eliminar-btn">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="text-end">
                                    <h4>Total: <span id="total">$ {{ $total }}</span></h4>
                                    <button id="pagarBtn" class="btn btn-primary">Pagar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        function actualizarTotal() {
            let nuevoTotalGeneral = 0;
            $('tbody.table-group-divider tr').each(function() {
                let precioTotalProducto = parseFloat($(this).find('td:nth-child(5)').text());
                nuevoTotalGeneral += precioTotalProducto;
            });
            $('#total').text('$' + nuevoTotalGeneral.toFixed(2));
        }

        $(document).ready(function() {
            let token = $('meta[name="csrf-token"]').attr('content');

            $('#pagarBtn').click(function() {
                alert('¡Gracias por usar esta demo de pago!');
            });

            $('.eliminar-btn').click(function(e) {
                e.preventDefault();
                let productoId = $(this).closest('.eliminar-form').data('producto-id');

                $.ajax({
                    url: '/carrito-producto/' + productoId,
                    method: 'DELETE',
                    data: {
                        _token: token
                    },
                    success: function(response) {
                        $('#eliminar-form-' + productoId).closest('tr').remove();
                        actualizarTotal();

                        if ($('tbody.table-group-divider tr').length === 0) {
                            $('#accordionExample').html('<p>El carrito está vacío actualmente.</p>');
                        }

                        console.log(response.message);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });

            $('.btn-outline-secondary').click(function() {
                let productoId = $(this).data('producto-id');
                let tipo = $(this).data('tipo');
                let cantidadElement = $(this).siblings('span.mx-2');
                let precioElement = $(this).closest('tr').find('td:nth-child(4)');
                let totalElement = $(this).closest('tr').find('td:nth-child(5)');

                var cantidad = parseInt(cantidadElement.text());
                var precio = parseFloat(precioElement.text());

                if (tipo === 'sumar') {
                    cantidad += 1;
                } else if (tipo === 'restar' && cantidad > 1) {
                    cantidad -= 1;
                }

                if (cantidad < 1) {
                    cantidad = 1;
                }

                cantidadElement.text(cantidad);

                let nuevoTotal = cantidad * precio;
                totalElement.text(nuevoTotal.toFixed(2));

                let nuevoTotalGeneral = 0;
                $('tbody.table-group-divider tr').each(function() {
                    let precioTotalProducto = parseFloat($(this).find('td:nth-child(5)').text());
                    nuevoTotalGeneral += precioTotalProducto;
                });

                $('#total').text('$' + nuevoTotalGeneral.toFixed(2));

                $.ajax({
                    url: '/actualizar-cantidad-producto',
                    method: 'POST',
                    data: {
                        producto_id: productoId,
                        cantidad: cantidad,
                        _token: token
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>

@endsection
