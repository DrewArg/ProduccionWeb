<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    //accion principal de este cnotrller
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index',[
        'productos'=>$productos
        ]);
    }

    public function home_destacados()
    {
        $productos = DB::table('productos')
            ->take(6);

        $productos = $productos->get();

        return view('index',[
            'productos'=>$productos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function show(Producto $producto)
    {
        return view('productos.detalle_producto', [
            'producto'=>$producto
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }


}
