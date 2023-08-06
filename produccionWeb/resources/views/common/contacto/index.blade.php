
@extends('common.layouts.layout')

@section('contents')




<div class="my-5 p-4 border border-black rounded-3 container ">



 <div class="col-12 mb-3">

    <h2>Contacto</h2>

 </div>





 <form method="POST" action="{{ route('contacto.procesar') }}" class="row g-4">
    @csrf

    <div class="col-md-6 mb-3">
        <label for="formGroupExampleInput" class="form-label">Nombre</label>
        <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="formGroupExampleInput"
            placeholder="Nombre" name="nombre">

        @error('nombre')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label for="formGroupExampleInput" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="formGroupExampleInput"
            placeholder="ejemplo@ejemplo.com" name="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-12">
        <label for="exampleFormControlTextarea1" class="form-label fs-4">En qué podemos ayudarte?</label>
        <textarea class="form-control @error('preguntas') is-invalid @enderror" id="exampleFormControlTextarea1"
            rows="3" name="preguntas"></textarea>

        @error('preguntas')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-12 text-center mb-1">
        <button class="btn btn-primary" type="submit">Enviar consulta</button>
    </div>
</form>


@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

</div>
@endsection