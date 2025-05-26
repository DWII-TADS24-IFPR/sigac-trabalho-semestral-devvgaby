@extends('layouts.aluno')

@section('title', 'Meu Perfil')
@section('page-title', 'Meu Perfil')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white fw-semibold">
        Meu Perfil
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped align-middle mb-0">
            <tbody>
                <tr>
                    <th scope="row" style="width: 20%">Nome Completo</th>
                    <td>{{ auth()->user()->aluno->nome }}</td>
                </tr>
                <tr>
                    <th scope="row">E-mail</th>
                    <td>{{ auth()->user()->email }}</td>
                </tr>
                <tr>
                    <th scope="row">CPF</th>
                    <td>{{ auth()->user()->aluno->cpf }}</td>
                </tr>
                <tr>
                    <th scope="row">Curso</th>
                    <td>{{ auth()->user()->aluno->curso->nome ?? '—' }}</td>
                </tr>
                <tr>
                    <th scope="row">Turma</th>
                    <td>{{ auth()->user()->aluno->turma->ano ?? '—' }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
