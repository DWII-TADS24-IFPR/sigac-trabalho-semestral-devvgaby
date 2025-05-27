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
        $alunos = Aluno::paginate(10);
        return view('admin.alunos.index', compact('alunos'));
    }


    public function create()
    {
        $cursos = Curso::all();
        $turmas = Turma::with('curso')->get();

        $usuariosComAluno = Aluno::pluck('user_id')->toArray();

        $usuariosSemAluno = User::whereNotIn('id', $usuariosComAluno)->get();

        return view('admin.alunos.create', compact('cursos', 'turmas', 'usuariosSemAluno'));
    }

    public function store(AlunoRequest $request)
    {
        $data = $request->validated();

        if (!empty($data['senha'])) {
            $data['senha'] = bcrypt($data['senha']);
        }

        Aluno::create($data);

        return redirect()->route('admin.alunos.index')->with('success', 'Aluno cadastrado com sucesso!');
    }


    public function show(string $id)
    {

    }

    public function edit(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        $cursos = Curso::all();
        $turmas = Turma::all();
        return view('admin.alunos.edit', compact('aluno', 'cursos', 'turmas'));
    }


    public function update(AlunoRequest $request, string $id)
    {
        $aluno = Aluno::findOrFail($id);
        $data = $request->validated();

        if (!empty($data['senha'])) {
            $data['senha'] = bcrypt($data['senha']);
        } else {
            unset($data['senha']);
        }

        $aluno->update($data);

        return redirect()->route('admin.alunos.index')->with('success', 'Aluno atualizado com sucesso!');
    }


    public function destroy(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();

        return redirect()->route('admin.alunos.index')->with('success', 'Aluno excluído com sucesso!');
    }

}
