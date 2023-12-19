@extends('admin.layouts.layout')

@section('template_title')
    {{ __('Update') }} Revision
@endsection

@section('contents')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Revision</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ URL::route('revisiones.update', $revision->id) }}" role="form"
                              enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.revisiones.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
