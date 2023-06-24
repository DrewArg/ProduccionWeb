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

    private function home_caratula()
    {
        $caratula = DB::table('productos')
            ->orderBy('updated_at', 'desc')
            ->first();

       return $caratula;
    }

    public function home_destacados()
    {
        $productos = DB::table('productos')
            ->take(6);

        $productos = $productos->get();

        return view('index',[
            'productos'=>$productos,
            'caratula'=>$this->home_caratula()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $producto = new Producto();
        return view('productos.create',[
            'producto' => $producto
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Producto::$rules);

        Producto::create($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto creado con exito');
    }

    public function show($id)
    {
        $producto = Producto::find($id);

        return view('productos.show', [
            'producto'=>$producto
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('productos.edit',[
           'producto' => $producto
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        request()->validate(Producto::$rules);

        $producto->update($request->all());

        return redirect()->route('productos.index')
            ->with('success','Producto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('success','Producto eliminado con éxito');
    }


}
