@extends('layouts.app')

@section('template_title')
    {{ $pedido->name ?? "{{ __('Show') Pedido" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $pedido->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Compra:</strong>
                            {{ $pedido->fecha_compra }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Entrega:</strong>
                            {{ $pedido->fecha_entrega }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Productos:</strong>
                            {{ $pedido->cantidad_productos }}
                        </div>
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $pedido->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $pedido->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
