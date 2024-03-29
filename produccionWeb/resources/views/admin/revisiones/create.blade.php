@extends('admin.layouts.layout')

@section('template_title')
    {{ __('Create') }} Revision
@endsection

@section('contents')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Revision</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ URL::route('revisiones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.revisiones.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
