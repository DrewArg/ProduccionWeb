@extends('layouts.app')

@section('template_title')
    {{ $revision->name ?? "{{ __('Show') Revision" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Revision</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('revisions.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $revision->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $revision->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Puntuacion:</strong>
                            {{ $revision->puntuacion }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $revision->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
