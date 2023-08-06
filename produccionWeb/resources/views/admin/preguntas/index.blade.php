@extends('admin.layouts.layout')

@section('template_title')
    Pregunta
@endsection

@section('contents')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pregunta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ URL::route('preguntas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Respondida</th>
										<th>Email</th>
										<th>Nombre</th>
										<th>Pregunta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($preguntas as $pregunta)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $pregunta->respondida }}</td>
											<td>{{ $pregunta->email }}</td>
											<td>{{ $pregunta->nombre }}</td>
											<td>{{ $pregunta->pregunta }}</td>

                                            <td>
                                                <form action="{{ URL::route('preguntas.destroy',$pregunta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ URL::route('preguntas.show',$pregunta->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ URL::route('preguntas.edit',$pregunta->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $preguntas->links() !!}
            </div>
        </div>
    </div>
@endsection
