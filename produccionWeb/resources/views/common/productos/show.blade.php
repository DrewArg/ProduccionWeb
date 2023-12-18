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

                                <select class="form-select mb-3" id="tipoProducto{{$producto->id}}" aria-label="Default select example">
                                    <option selected>Formato</option>
                                    <option value="fisico">Fisico</option>
                                    <option value="digital">Digital</option>
                                </select>

                                <select class="form-select" id="cantidadProducto{{$producto->id}}" aria-label="Default select example">
                                    <option selected>Cantidad</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select </div>
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
                                    <button class="btn bg-info align-self-end" onclick="agregarAlCarrito({{ $producto->id }})">Agregar al Carrito</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</article>

<script>
    function agregarAlCarrito(productoId) {
        let cantidad = $("#cantidadProducto" + productoId).val();
        let tipo = $("#tipoProducto" + productoId).val();

        $.ajax({
            url: '{{ route("carrito.agregar") }}',
            method: 'POST',
            data: {
                producto_id: productoId,
                cantidad: cantidad,
                tipo: tipo,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                alert('Producto agregado al carrito correctamente.');
            },
            error: function(xhr, status, error) {
                var errorMessage = error || xhr.statusText; // Obtener el mensaje de error

                alert('Error: ' + errorMessage);
                alert('Error al agregar el producto al carrito.');
            }
        });
    }
</script>

@endsection