<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('respondida', '¿Respondida?') }}
            <div>
                <label class="radio-inline">
                    {{ Form::radio('respondida', 1, $pregunta->respondida == 1) }} Sí
                </label>
                <label class="radio-inline">
                    {{ Form::radio('respondida', 0, $pregunta->respondida == 0) }} No
                </label>
            </div>
            {!! $errors->first('respondida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $pregunta->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $pregunta->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('preguntas') }}
            {{ Form::text('preguntas', $pregunta->pregunta, ['class' => 'form-control' . ($errors->has('preguntas') ? ' is-invalid' : ''), 'placeholder' => 'Pregunta']) }}
            {!! $errors->first('preguntas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Aceptar') }}</button>
    </div>
</div>
