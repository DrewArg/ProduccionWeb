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
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validar los datos de entrada
    $request->validate(Usuario::$rules);

    // Verificar si ya existe un usuario con el mismo correo electrónico
    $existingUser = Usuario::where('email', $request->email)->first();

    if ($existingUser) {
        // Si el usuario ya existe, redirigir con un mensaje de error
        return redirect()->route('usuarios.index')->with('success', 'El correo electrónico ya está en uso.');
    }

    // Si no existe un usuario con el mismo correo electrónico, proceder con la creación
    $carrito = new Carrito();
    $carrito->save();

    $usuario = new Usuario([
        'nombre' => $request->nombre,
        'apellido' => $request->apellido,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'id_carrito' => $carrito->id,
        'telefono' => $request->telefono,
        'tipo_usuario' => $request->tipo_usuario,
        'direccion' => $request->direccion
    ]);

    $usuario->save();

    return redirect()->route('usuarios.index')->with('success', 'Usuario creado con éxito');
}

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);

        return view('admin/usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Usuario $usuario
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Usuario $usuario)
    // {
    //     request()->validate(Usuario::$rules);

    //     $usuario->update($request->all());

    //     return redirect()->route('usuarios.index')
    //         ->with('success', 'Usuario editado exitosamente');
    // }

    public function update(Request $request, Usuario $usuario)
    {
        // Validar los datos de entrada
        $request->validate(Usuario::$rules);
    
        // Validar si se proporciona una nueva contraseña
        if ($request->filled('password')) {
            $request->validate([
                'password' => 'required|min:8', // Ajusta las reglas según tus necesidades
            ]);
            $usuario->password = Hash::make($request->password);
        }
    
        // Actualizar el resto de los datos del usuario
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
