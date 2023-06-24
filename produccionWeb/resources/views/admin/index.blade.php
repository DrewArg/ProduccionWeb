@extends('admin.layouts.layout')

@section('contents')

    <h3>Productos</h3>
    <img class="edit-delete-icons" src="{{ URL::to('/') }}/iconos/plus.png" alt="plus to add item">

    <table class="table table-light table-striped">
        <thead>
        <tr>
            <th scope="col">idProducto</th>
            <th scope="col">Título</th>
            <th scope="col">Sinopsis</th>
            <th scope="col">Stock</th>
            <th scope="col">Precio</th>
            <th scope="col">Autor</th>
            <th scope="col">Género</th>
            <th scope="col">Editorial</th>
            <th scope="col">Tipo Producto</th>
            <th scope="col">Imágen</th>
            <th scope="col">Puntuación</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">

        <tr>
            <th scope="row">3</th>
            <td>Lorem</td>
            <td>Lorem ipsum dolor.</td>
            <td>15</td>
            <td>2000</td>
            <td>Agatha Christy</td>
            <td>Acción</td>
            <td>XXXXX</td>
            <td>Físico</td>
            <td>img</td>
            <td>4.5</td>
            <td class="acciones"><img class="edit-delete-icons" src="{{ URL::to('/') }}/iconos/edit.png"
                                          alt="pencil to edit"> <img class="edit-delete-icons"
                                                                     src="{{ URL::to('/') }}/iconos/delete.png"
                                                                     alt="trash can to delete">
            </td>
        </tr>
        </tbody>
    </table>

@endsection
