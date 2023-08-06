<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * Class UsuarioController
 * @package App\Http\Controllers
 */
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $usuarios = Usuario::paginate();

        return view('admin.usuarios.index', compact('usuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $usuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $usuario = new Usuario();
        return view('admin.usuarios.create', compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     */
//    public function store(Request $request)
//    {
//        request()->validate(Usuario::$rules);
//
//        Usuario::create($request->all());
//
//        return redirect()->route('usuarios.index')
//            ->with('success', 'Usuario creado con exito');
//    }

    public function store(Request $request)
    {
        request()->validate(Usuario::$rules);

        $carrito = new Carrito();
        $carrito->save();




       $usuario = new Usuario([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'password' => $request->clave,
            'id_carrito' => $carrito->id,
           'telefono'=>$request->telefono,
           'direccion'=>$request->direccion
        ]);

        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);

        return view('admin.usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);

        return view('admin.usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Usuario $user
     */
    public function update(Request $request, Usuario $user)
    {
        request()->validate(Usuario::$rules);

        $user->update($request->all());

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario actualizado con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = Usuario::find($id)->delete();

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario eliminado con exito');
    }
}
