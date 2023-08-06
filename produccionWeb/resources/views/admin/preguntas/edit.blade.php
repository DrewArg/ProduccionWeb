@extends('admin.layouts.layout')

@section('template_title')
    {{ __('Update') }} Pregunta
@endsection

@section('contents')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Pregunta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ URL::route('preguntas.update', $pregunta->id) }}" role="form"
                              enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.preguntas.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
