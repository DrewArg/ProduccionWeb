@extends('admin.layouts.layout')

@section('contents')




    <div class="container mt-5">
    <div class="card">
      <div class="card-header bg-dark text-white">
        <h3>Bienvenido Administrador</h4>
      </div>
      <div class="card-body">
        <h4 class="card-text">Bienvenido a la plataforma de administración.</h4>
        <p class="card-text">Aquí puedes gestionar los usuarios, revisiones, preguntas.</p>
        <ul>
        <li><a class="nav-link fs-6" href="{{URL::route('productos.admin_index')}}">Productos</a></li>
        <li><a class="nav-link fs-6" href="{{URL::route('users.index')}}">Usuarios</a></li>
        <li><a class="nav-link fs-6" href="{{URL::route('revisiones.index')}}">Revisiones</a></li>
        <li><a class="nav-link fs-6" href="{{URL::route('preguntas.index')}}">Preguntas</a></li>
    </ul>
      </div>
    </div>
  </div>


@endsection
