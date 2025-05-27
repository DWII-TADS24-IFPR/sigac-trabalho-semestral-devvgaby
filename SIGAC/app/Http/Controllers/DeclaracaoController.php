<?php

namespace App\Http\Controllers;

use App\Models\Declaracao;
use App\Models\Aluno;
use App\Models\Comprovante;
use App\Http\Requests\DeclaracaoRequest;

class DeclaracaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $declaracoes = auth()->user()->aluno->declaracoes;
        return view('aluno.declaracoes.index', compact('declaracoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alunos = Aluno::all();
        $comprovantes = Comprovante::all();
        return view('declaracoes.create', compact('alunos', 'comprovantes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $aluno = auth()->user()->aluno;

        $totalHoras = $aluno->comprovantes()->sum('horas');

        if ($totalHoras < 120) {
            return redirect()->back()->with('error', 'Você ainda não possui horas suficientes para emitir a declaração.');
        }

        $declaracao = Declaracao::create([
            'hash' => Str::uuid(),
            'data' => Carbon::now(),
            'aluno_id' => $aluno->id,
        ]);

        $pdf = Pdf::loadView('aluno.declaracoes.pdf', [
            'declaracao' => $declaracao,
            'aluno' => $aluno,
            'totalHoras' => $totalHoras,
        ]);

        return $pdf->download('declaracao.pdf');
    }

    /**
     * Display the specified resource.
     */
     public function show(Declaracao $declaracao)
    {
        return view('aluno.declaracoes.show', compact('declaracao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Declaracao $declaracao)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DeclaracaoRequest $request, Declaracao $declaracao)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Declaracao $declaracao)
    {
        
    }
}   
