<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use App\Models\Curso;
use App\Http\Requests\TurmaRequest;

class TurmaController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(TurmaRequest $request) 
    {
        Turma::create($request->validated());

        return redirect()->route('turmas.index')->with('success', 'Turma criada com sucesso!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TurmaRequest $request, Turma $turma) 
    {
        $turma->update($request->validated());

        return redirect()->route('turmas.index')->with('success', 'Turma atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Turma $turma)
    {
        $turma->delete(); // Soft delete

        return redirect()->route('turmas.index')->with('success', 'Turma excluída com sucesso!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos = Curso::all(); 
        return view('turmas.create', compact('cursos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Turma $turma)
    {
        $cursos = Curso::all(); 
        return view('turmas.edit', compact('turma', 'cursos'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $turmas = Turma::all(); 
        return view('turmas.index', compact('turmas'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Turma $turma)
    {
        return view('turmas.show', compact('turma'));
    }

    /**
     * Display a listing of the trashed resources (soft-deleted).
     */
    public function trashed()
    {
        $turmas = Turma::onlyTrashed()->get();
        return view('turmas.trashed', compact('turmas'));
    }

    /**
     * Restore the specified trashed resource.
     */
    public function restore($id)
    {
        $turma = Turma::onlyTrashed()->find($id);
        $turma->restore();

        return redirect()->route('turmas.index')->with('success', 'Turma restaurada com sucesso!');
    }

    /**
     * Permanently remove the specified trashed resource from storage.
     */
    public function forceDelete($id)
    {
        $turma = Turma::onlyTrashed()->find($id);
        $turma->forceDelete(); 

        return redirect()->route('turmas.index')->with('success', 'Turma excluída permanentemente!');
    }
}
