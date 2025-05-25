@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Lista de Turmas</h2>
        <a href="{{ route('admin.turmas.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Nova Turma
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <div class="d-none d-md-block">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Ano</th>
                        <th>Curso</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($turmas as $turma)
                        <tr>
                            <td>{{ $turma->ano }}</td>
                            <td>{{ $turma->curso->nome ?? '-' }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.turmas.edit', $turma->id) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>
                                <form action="{{ route('admin.turmas.destroy', $turma->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir esta turma?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i> Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">Nenhuma turma cadastrada.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="d-md-none">
            @forelse ($turmas as $turma)
                <div class="card mb-3">
                    <div class="card-body">
                        <p><strong>Ano:</strong> {{ $turma->ano }}</p>
                        <p><strong>Curso:</strong> {{ $turma->curso->nome ?? '-' }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.turmas.edit', $turma->id) }}" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i> Editar
                            </a>
                            <form action="{{ route('admin.turmas.destroy', $turma->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta turma?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i> Excluir
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">Nenhuma turma cadastrada.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection

