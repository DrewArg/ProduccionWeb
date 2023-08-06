@extends('layouts.app')

@section('template_title')
    Revision
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Revision') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('revisions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Producto Id</th>
										<th>User Id</th>
										<th>Puntuacion</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($revisions as $revision)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $revision->producto_id }}</td>
											<td>{{ $revision->user_id }}</td>
											<td>{{ $revision->puntuacion }}</td>
											<td>{{ $revision->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('revisions.destroy',$revision->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('revisions.show',$revision->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('revisions.edit',$revision->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $revisions->links() !!}
            </div>
        </div>
    </div>
@endsection
