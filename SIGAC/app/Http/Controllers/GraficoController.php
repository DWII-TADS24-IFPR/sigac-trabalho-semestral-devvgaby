<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Aluno;
use App\Models\Comprovante;

class GraficoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index(Request $request)
    {
        $turmas = Turma::with('curso')->get();

        $turma_id = $request->input('turma_id');

        $dadosGrafico = [];

        if ($turma_id) {
            
            $alunos = Aluno::where('turma_id', $turma_id)->get();

            foreach ($alunos as $aluno) {
                
                $totalHoras = Comprovante::where('aluno_id', $aluno->id)
                    ->sum('horas');

                $dadosGrafico[] = [
                    'nome' => $aluno->nome,
                    'horas' => $totalHoras,
                ];
            }
        }

        return view('admin.graficos.index', compact('turmas', 'dadosGrafico', 'turma_id'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
