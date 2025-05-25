@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Lista de Cursos</h2>
        <a href="{{ route('admin.cursos.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Novo Curso
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Sigla</th>
                    <th>Total de Horas</th>
                    <th>Nível</th>
                    <th>Eixo</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cursos as $curso)
                <tr>
                    <td>{{ $curso->nome }}</td>
                    <td>{{ $curso->sigla }}</td>
                    <td>{{ $curso->total_horas }}</td>
                    <td>{{ $curso->nivel->nome ?? '-' }}</td>
                    <td>{{ $curso->eixo->nome ?? '-' }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.cursos.edit', $curso->id) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i> Editar
                        </a>
                        <form action="{{ route('admin.cursos.destroy', $curso->id) }}" method="POST" class="d-inline" 
                            onsubmit="return confirm('Tem certeza que deseja excluir este curso?');">
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
                    <td colspan="6" class="text-center">Nenhum curso cadastrado.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        {{ $cursos->links() }}
    </div>
</div>
@endsection

