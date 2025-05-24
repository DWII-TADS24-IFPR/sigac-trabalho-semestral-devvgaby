<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use App\Http\Requests\NivelRequest;

class NivelController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(NivelRequest $request) 
    {
        Nivel::create($request->validated());

        return redirect()->route('niveis.index')->with('success', 'Nível criado com sucesso!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NivelRequest $request, Nivel $nivel) 
    {
        $nivel->update($request->validated());

        return redirect()->route('niveis.index')->with('success', 'Nível atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nivel $nivel)
    {
        $nivel->delete(); 

        return redirect()->route('niveis.index')->with('success', 'Nível excluído com sucesso!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('niveis.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nivel $nivel)
    {
        return view('niveis.edit', compact('nivel'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $niveis = Nivel::all(); 
        return view('niveis.index', compact('niveis'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Nivel $nivel)
    {
        return view('niveis.show', compact('nivel'));
    }

    /**
     * Display a listing of the trashed resources.
     */
    public function trashed()
    {
        $niveis = Nivel::onlyTrashed()->get(); 
        return view('niveis.trashed', compact('niveis'));
    }

    /**
     * Restore the specified trashed resource.
     */
    public function restore($id)
    {
        $nivel = Nivel::onlyTrashed()->find($id);
        $nivel->restore();

        return redirect()->route('niveis.index')->with('success', 'Nível restaurado com sucesso!');
    }

    /**
     * Permanently remove the specified trashed resource from storage.
     */
    public function forceDelete($id)
    {
        $nivel = Nivel::onlyTrashed()->find($id);
        $nivel->forceDelete();

        return redirect()->route('niveis.index')->with('success', 'Nível excluído permanentemente!');
    }
}
