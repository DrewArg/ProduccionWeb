

<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('título') }}
            {{ Form::text('titulo', $producto->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'agregue el título']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('sinopsis') }}
            {{ Form::text('sinopsis', $producto->sinopsis, ['class' => 'form-control' . ($errors->has('sinopsis') ? ' is-invalid' : ''), 'placeholder' => 'agregue la sinopsis']) }}
            {!! $errors->first('sinopsis', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('stock') }}
            {{ Form::number('stock', $producto->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'agregue el stock']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::number('precio', $producto->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'agregue el precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('autor') }}
            {{ Form::text('autor', $producto->autor, ['class' => 'form-control' . ($errors->has('autor') ? ' is-invalid' : ''), 'placeholder' => 'agregue el autor']) }}
            {!! $errors->first('autor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            {{ Form::text('genero', $producto->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'agregue el genero']) }}
            {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('editorial') }}
            {{ Form::text('editorial', $producto->editorial, ['class' => 'form-control' . ($errors->has('editorial') ? ' is-invalid' : ''), 'placeholder' => 'agregue la editorial']) }}
            {!! $errors->first('editorial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_producto') }}
            {{ Form::select('tipo_producto', array(
                'Físico' => 'fisico',
                'Audio libro' => 'audio_libro',
            ), $producto->tipo_producto, ['class' => 'form-control' . ($errors->has('tipo_producto') ? ' is-invalid' : ''), 'placeholder' => 'seleccione el tipo']) }}
            {!! $errors->first('tipo_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('URL imágen') }}
            {{ Form::text('imagen', $producto->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'agregue la url de la imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('lenguaje') }}
            {{ Form::select('lenguaje' ,array(
               'Español' => 'español',
               'Inglés' => 'ingles'
            ), $producto->lenguaje, ['class' => 'form-control' . ($errors->has('lenguaje') ? ' is-invalid' : ''), 'placeholder' => 'seleccione el lenguaje']) }}
            {!! $errors->first('lenguaje', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">{{ __('Submit') }}</button>
        <a class="btn btn-danger" href="{{URL::route('productos.index')}}">Cancelar</a>
    </div>
</div>
