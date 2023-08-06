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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revisions = Revision::paginate();

        return view('revision.index', compact('revisions'))
            ->with('i', (request()->input('page', 1) - 1) * $revisions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $revision = new Revision();
        return view('revision.create', compact('revision'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Revision::$rules);

        $revision = Revision::create($request->all());

        return redirect()->route('revisions.index')
            ->with('success', 'Revision creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $revision = Revision::find($id);

        return view('revision.show', compact('revision'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $revision = Revision::find($id);

        return view('revision.edit', compact('revision'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Revision $revision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Revision $revision)
    {
        request()->validate(Revision::$rules);

        $revision->update($request->all());

        return redirect()->route('revisions.index')
            ->with('success', 'Revision editada exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $revision = Revision::find($id)->delete();

        return redirect()->route('revisions.index')
            ->with('success', 'Revision eliminada exitosamente');
    }
}
