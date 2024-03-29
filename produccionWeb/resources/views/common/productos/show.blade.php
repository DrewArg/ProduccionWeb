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
                                </select> </div>
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


    <section>


   <div class="container mt-5">
       <h2>Deja una revisión</h2>

       <form method="POST" action="{{ route('revisiones.storeFromUser', ['id' => $producto->id]) }}" role="form" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="producto_id" value="{{ $producto->id }}">

    <div class="form-group">
        <label hidden="hidden" for="producto_id">Producto ID:</label>
        <input hidden="hidden" type="text" class="form-control" id="producto_id" name="producto_id" value="{{ $producto->id }}" readonly>
    </div>

    <div class="form-group">
        <label hidden="hidden" for="user_id">Usuario ID:</label>
        <input hidden="hidden" type="text" class="form-control" id="user_id" name="user_id" value="{{ Auth::id() }}" readonly>
    </div>

    <div class="form-group">
        <label for="puntuacion">Puntuación:</label>
        <select class="form-control" id="puntuacion" name="puntuacion">
            <option value="5">5 - Excelente</option>
            <option value="4">4 - Muy Bueno</option>
            <option value="3">3 - Bueno</option>
            <option value="2">2 - Regular</option>
            <option value="1">1 - Malo</option>
        </select>
    </div>

    <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Dejá tu revision acá..."></textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-2">{{ __('Enviar Revisión') }}</button>
</form>



   </div>
    </section>


    <section>
        <div class="container mt-5">
            <h2>Revisiones de usuarios</h2>
            <div class="row">
                @if($producto->revisions->isNotEmpty())
                    @foreach($producto->revisions as $revision)
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <div class="card revision-card">
                                <div class="card-body">
                                    @for ($i = 0; $i < $revision->puntuacion; $i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                    <p class="card-text">{{ $revision->descripcion }}</p>
                                    <p class="card-text text-muted">{{ $revision->user->nombre }} | {{ $revision->created_at }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No hay revisiones disponibles.</p>
                @endif
            </div>
        </div>
    </section>


</article>

<script>
    function agregarAlCarrito(productoId) {
        let cantidad = $("#cantidadProducto" + productoId).val();
        let tipo = $("#tipoProducto" + productoId).val();

        console.log(cantidad)
        console.log(tipo)

        $.ajax({
            url: '{{ route("carrito.agregarProducto") }}',
            method: 'POST',
            data: {
                producto_id: productoId,
                cantidad: cantidad,
                tipo: tipo,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                console.log(response)
                alert('Producto agregado al carrito correctamente.');
            },
            error: function(xhr, status, error) {
                let errorMessage = error || xhr.statusText;
                console.error(errorMessage)
                alert('Error al agregar el producto al carrito.');
            }
        });
    }
</script>

@endsection
