<?php

namespace App\Http\Controllers;

use App\Models\Revision;
use Illuminate\Http\Request;

/**
 * Class RevisionController
 * @package App\Http\Controllers
 */
class RevisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $revisiones = Revision::paginate();

        return view('admin.revisiones.index', compact('revisiones'))
            ->with('i', (request()->input('page', 1) - 1) * $revisiones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $revision = new Revision();
        return view('admin.revisiones.create', compact('revision'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        request()->validate(Revision::$rules);

        $revision = Revision::create($request->all());

        return redirect()->route('revisiones.index')
            ->with('success', 'Revision creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     */
    public function show($id)
    {
        $revision = Revision::find($id);

        return view('admin.revisiones.show', compact('revision'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     */
    public function edit($id)
    {
        $revision = Revision::find($id);

        return view('admin.revisiones.edit', compact('revision'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Revision $revision
     */
    public function update(Request $request, Revision $revision)
    {
        request()->validate(Revision::$rules);

        $revision->update($request->all());

        return redirect()->route('revisiones.index')
            ->with('success', 'Revision editada exitosamente');
    }

    /**
     * @param int $id
     * @throws \Exception
     */
    public function destroy($id)
    {
        $revision = Revision::find($id)->delete();

        return redirect()->route('revisiones.index')
            ->with('success', 'Revision eliminada exitosamente');
    }
}
