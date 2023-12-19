<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Models\Carrito;
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index()
    {
        $usuarios = Usuario::paginate();

        return view('admin/usuario.index', compact('usuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $usuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function create()
    {
        $usuario = new Usuario();
        return view('admin/usuario.create', compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
{
    $request->validate(Usuario::$rules);

    $carrito = new Carrito();
    $carrito->save();


    $existingUser = Usuario::where('email', $request->email)->first();

    if ($existingUser) {
        return redirect()->route('usuarios.index')->with('success', 'El correo electrónico ya está en uso.');
    }

    $usuario = new Usuario([
        'nombre' => $request->nombre,
        'apellido' => $request->apellido,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'id_carrito' => $carrito->id,
        'telefono' => $request->telefono,
        'tipo_usuario' => $request->tipo_usuario,
        'direccion' => $request->direccion,
    ]);

    $usuario->save();

    return redirect()->route('usuarios.index')->with('success', 'Usuario creado con éxito');
}

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);

        return view('admin/usuario.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);

        return view('admin/usuario.edit', compact('usuario'));
    }


    public function update(Request $request, Usuario $usuario)
    {
        $request->validate(Usuario::$rules);

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'required|min:8',
            ]);
            $usuario->password = Hash::make($request->password);
        }

        $usuario->update([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'tipo_usuario' => $request->tipo_usuario,
            'direccion' => $request->direccion,
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario editado exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id)->delete();

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario eliminado exitosamente');
    }
}
