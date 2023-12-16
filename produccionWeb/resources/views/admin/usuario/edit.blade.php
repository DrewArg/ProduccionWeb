@extends('admin.layouts.layout')

@section('template_title')
    {{ __('Update') }} Usuario
@endsection

@section('contents')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')
                <div class="float-right">
                    <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> {{ __('Volver') }}</a>
                </div>
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Usuario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('usuarios.update', $usuario->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin/usuario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
