<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index',[
            'pedidos'=>$pedidos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pedidos = Pedido::all();
        return view('pedidos.create',[
            'pedidos'=>$pedidos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pedido::create([
            'estado'=>$request->estado,
            'fecha_compra'=>$request->fecha_compra,
            'fecha_entrega'=>$request->fecha_entrega,
            'cantidad_productos'=>$request->cantidad_productos,
            'producto_id'=>$request->producto_id,
            'user_id'=>$request->user_id
        ]);
        return redirect()->route('pedidos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        return view('pedidos.detalle_pedido', [
            'pedido'=>$pedido
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
