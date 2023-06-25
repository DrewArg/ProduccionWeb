@extends('admin.layouts.layout')

@section('contents')

    <h3>Bienvenido Admin!</h3>
    <p>¿Que te gustaría chusmear?</p>

    <ul>
        <li><a href="{{URL::route('productos.admin_index')}}">Productos</a></li>
        <li><a href="{{URL::route('usuarios.index')}}">Usuarios</a></li>
        <li>Revisiones</li>
        <li>Preguntas</li>
    </ul>


@endsection
