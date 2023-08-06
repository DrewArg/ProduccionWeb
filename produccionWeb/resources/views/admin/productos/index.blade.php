@extends('admin.layouts.layout')

@section('template_title')
    Producto
@endsection
@section('contents')

    <!-- <h3>Productos</h3>
    <a href="{{URL::route('productos.create')}}">
        <img class="edit-delete-icons" src="{{ URL::to('/') }}/iconos/plus.png" alt="plus to add item">
    </a>

    <table class="table table-light table-striped">
        <thead>
        <tr>
            <th scope="col">Título</th>
            <th scope="col">Sinopsis</th>
            <th scope="col">Stock</th>
            <th scope="col">Precio</th>
            <th scope="col">Autor</th>
            <th scope="col">Género</th>
            <th scope="col">Editorial</th>
            <th scope="col">Tipo_Producto</th>
            <th scope="col">Imágen</th>
            <th scope="col">Puntuación</th>
            <th scope="col">Es_activo</th>
            <th scope="col">Acciones</th>

        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($productos as $prod)
            <tr>
                <td>{{$prod->titulo}}</td>
                <td>{{$prod->sinopsis}}</td>
                <td>{{$prod->stock}}</td>
                <td>{{$prod->precio}}</td>
                <td>{{$prod->autor}}</td>
                <td>{{$prod->genero}}</td>
                <td>{{$prod->editorial}}</td>
                <td>{{$prod->tipo_producto}}</td>
                <td><img class="product-image" src="{{$prod->imagen}}"/></td>
                <td>{{$prod->puntuacion}}</td>
                <td>{{$prod->es_activo}}</td>
                <td class="acciones">
                    <a href="{{URL::route('productos.edit',$prod->id)}}">
                        <img class="edit-delete-icons" src="{{ URL::to('/') }}/iconos/edit.png"
                             alt="pencil to edit">

                    </a>
                    <a href="{{URL::route('productos.destroy',$prod->id)}}" method="POST">
                        <img class="edit-delete-icons" src="{{ URL::to('/') }}/iconos/delete.png"
                             alt="trash can to delete">
                    </a>

                </td>
            </tr>

        @endforeach

        </tbody>
    </table>

    {{$productos->links()}} -->



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
                            <a href="{{ URL::route('productos.create') }}" class="btn btn-primary btn-sm float-right"
                               data-placement="left">
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
                                    <td class="acciones">
                                        <a href="{{ URL::route('productos.edit', $prod->id) }}">
                                            <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                        </a>
                                        <form action="{{ URL::route('productos.destroy', $prod->id) }}" method="POST">
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
