@extends('admin.layouts.layout')

@section('template_title')
Producto
@endsection
@section('contents')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Productos') }}
                        </span>
                        <div class="float-right">
                            <a href="{{ URL::route('productos.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Crear Nuevo') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>Título</th>
                                    <th>Sinopsis</th>
                                    <th>Stock</th>
                                    <th>Precio</th>
                                    <th>Autor</th>
                                    <th>Género</th>
                                    <th>Editorial</th>
                                    <th>Tipo_Producto</th>
                                    <th>Imágen</th>
                                    <th>Puntuación</th>
                                    <th>Es_activo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $prod)
                                <tr>
                                    <td>{{ $prod->titulo }}</td>
                                    <td>{{ $prod->sinopsis }}</td>
                                    <td>{{ $prod->stock }}</td>
                                    <td>{{ $prod->precio }}</td>
                                    <td>{{ $prod->autor }}</td>
                                    <td>{{ $prod->genero }}</td>
                                    <td>{{ $prod->editorial }}</td>
                                    <td>{{ $prod->tipo_producto }}</td>
                                    <td><img class="product-image" src="{{ $prod->imagen }}" /></td>
                                    <td>{{ $prod->puntuacion }}</td>
                                    <td>{{ $prod->es_activo }}</td>
                                    <td>
                                        <form action="{{ URL::route('productos.destroy', $prod->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{  URL::route('productos.show',$prod->id) }}">
                                                <i class="fa fa-fw fa-eye"> </i> {{ __('Mostrar') }}</a>
                                            <a class="btn btn-sm btn-primary " href="{{ URL::route('productos.edit', $prod->id) }}">
                                                <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                            </a>


                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $productos->links() !!}
        </div>
    </div>
</div>


@endsection