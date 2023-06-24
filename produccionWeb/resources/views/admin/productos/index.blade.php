@extends('admin.layouts.layout')

@section('template_title')
    Producto
@endsection
@section('contents')

    <h3>Productos</h3>
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

    {{$productos->links()}}

@endsection
