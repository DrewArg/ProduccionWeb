<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use Illuminate\Http\Request;


/**
 * Class PreguntaController
 * @package App\Http\Controllers
 */
class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $preguntas = Pregunta::paginate();

        return view('admin.preguntas.index', compact('preguntas'))
            ->with('i', (request()->input('page', 1) - 1) * $preguntas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $pregunta = new Pregunta();
        return view('admin.preguntas.create', compact('pregunta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        request()->validate(Pregunta::$rules);

        $pregunta = Pregunta::create($request->all());

        return redirect()->route('preguntas.index')
            ->with('success', 'Pregunta creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     */
    public function show($id)
    {
        $pregunta = Pregunta::find($id);

        return view('admin.preguntas.show', compact('pregunta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     */
    public function edit($id)
    {
        $pregunta = Pregunta::find($id);

        return view('admin.preguntas.edit', compact('pregunta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pregunta $pregunta
     */
    public function update(Request $request, Pregunta $pregunta)
    {
        request()->validate(Pregunta::$rules);

        $pregunta->update($request->all());

        return redirect()->route('preguntas.index')
            ->with('success', 'Pregunta editada exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pregunta = Pregunta::find($id);
        if ($pregunta) {
            $pregunta->delete();
           
            session()->flash('success', 'Pregunta eliminada exitosamente');
        }

        // Redirigimos al CRUD de preguntas
        return redirect()->route('preguntas.index');
    }



    public function procesarFormulario(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'preguntas' => 'required|string|max:1000',
        ]);
    
        Pregunta::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'preguntas' => $request->preguntas,
            'respondida' => false, 
        ]);
    
        $request->session()->flash('success', 'Gracias por tu mensaje. Te responderemos pronto.');
    
        return back();
    }

}
