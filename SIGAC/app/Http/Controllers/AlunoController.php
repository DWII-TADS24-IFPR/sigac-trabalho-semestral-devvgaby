<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Models\{Aluno, User, Curso, Turma};

class AlunoController extends Controller
{
    //view para a pagina principal do aluno
    public function dashboard()
    {
        return view('aluno.dashboard');
    }
    public function index()
    {
        // $alunos = Aluno::all();
        // return view('alunos.index')->with('alunos', $alunos);
    }

    public function create()
    {
        // $users = User::all();
        // $cursos = Curso::all();
        // $turmas = Turma::all();
        // return view('alunos.create', compact('users', 'cursos', 'turmas'));
    }

    public function store(AlunoRequest $request)
    {
        // $data = $request->validated();

        // if (!empty($data['senha'])) {
        //     $data['senha'] = bcrypt($data['senha']);
        // }

        // Aluno::create($data);

        // return redirect()->route('alunos.index')->with('success', 'Aluno cadastrado com sucesso!');
    }

    public function show(string $id)
    {
        // $aluno = Aluno::with(['curso', 'turma', 'user'])->findOrFail($id);
        // return view('alunos.show', compact('aluno'));
    }

    public function edit(string $id)
    {
        // $aluno = Aluno::findOrFail($id);
        // $users = User::all();
        // $cursos = Curso::all();
        // $turmas = Turma::all();
        // return view('alunos.edit', compact('aluno', 'users', 'cursos', 'turmas'));
    }

    public function update(AlunoRequest $request, string $id)
    {
        // $aluno = Aluno::findOrFail($id);
        // $data = $request->validated();

        // if (!empty($data['senha'])) {
        //     $data['senha'] = bcrypt($data['senha']);
        // } else {
        //     unset($data['senha']); 
        // }

        // $aluno->update($data);

        // return redirect()->route('alunos.index')->with('success', 'Aluno atualizado com sucesso!');
    }

    public function destroy(string $id)
    {
        // $aluno = Aluno::findOrFail($id);
        // $aluno->delete();

        // return redirect()->route('alunos.index')->with('success', 'Aluno excluído com sucesso!');
    }
}
