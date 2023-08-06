@extends('admin.layouts.layout')

@section('template_title')
    {{ $pregunta->name ?? "{{ __('Show') Pregunta" }}
@endsection

@section('contents')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Pregunta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ URL::route('preguntas.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Respondida:</strong>
                            {{ $pregunta->respondida }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $pregunta->email }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pregunta->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Pregunta:</strong>
                            {{ $pregunta->pregunta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
