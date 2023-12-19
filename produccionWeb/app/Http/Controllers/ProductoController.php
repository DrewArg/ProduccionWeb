<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Revision;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::where('es_activo',1)
            ->orderBy('updated_at', 'desc')
            ->paginate(10);
        return view('common.productos.index', [
            'productos' => $productos
        ]);
    }

    public function admin_index()
    {
        $productos = DB::table('productos')
            ->orderBy('updated_at', 'desc')
            ->paginate(10);
        return view('admin.productos.index', [
            'productos' => $productos
        ]);
    }

    private function home_caratula()
    {
        $caratula = DB::table('productos')
            ->where('es_activo',1)
            ->orderBy('updated_at', 'desc')
            ->first();

        return $caratula;
    }

    public function home_destacados()
    {
        $productos = DB::table('productos')
            ->where('es_activo',1)
            ->orderBy('updated_at', 'desc')
            ->take(6);

        $productos = $productos->get();

        return view('common.index', [
            'productos' => $productos,
            'caratula' => $this->home_caratula()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $producto = new Producto();
        return view('admin.productos.create', [
            'producto' => $producto
        ]);
    }

     public function show($id)
        {
            $producto = Producto::find($id);
            $revisiones = $producto->latestRevisions(5); // Obtener las últimas 5 revisiones para este producto

            return view('common.productos.show', [
                'producto' => $producto,
                'revisiones' => $revisiones,
            ]);
        }

        public function store(Request $request)
        {
            $request->validate(Producto::$rules);

            Producto::create($request->all());

            return redirect()->route('productos.admin_index')
                ->with('success', 'Producto creado con éxito');
        }

        public function update(Request $request, Producto $producto)
        {
            $request->validate(Producto::$rules);

            $producto->update($request->all());

            return redirect()->route('productos.admin_index')
                ->with('success', 'Producto actualizado con éxito');
        }

        public function destroy($id)
        {
            $producto = Producto::find($id);
            $producto->delete();

            return redirect()->route('productos.admin_index')
                ->with('success', 'Producto eliminado con éxito');
        }

public function guardarRevision(Request $request, $id)
{
    $producto = Producto::find($id);

    if (!$producto) {
        return redirect()->route('productos.index')
            ->with('error', 'El producto no existe');
    }

    $request->validate(Revision::$rules);

    $revision = new Revision([
        'producto_id' => $id,
        'user_id' => Auth::id(),
        'puntuacion' => $request->puntuacion,
        'descripcion' => $request->descripcion,
    ]);

    $producto->revisions()->save($revision);

    return redirect()->route('productos.show', $id)
        ->with('success', 'Revisión creada exitosamente.');
}




}
