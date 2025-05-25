@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Lista de Categorias</h2>
        <a href="{{ route('admin.categorias.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Nova Categoria
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
                    <th>Máximo de Horas</th>
                    <th>Curso</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->nome }}</td>
                        <td>{{ $categoria->maximo_horas }}</td>
                        <td>{{ $categoria->curso->nome ?? '—' }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.categorias.edit', $categoria->id) }}" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i> Editar
                            </a>
                            <form action="{{ route('admin.categorias.destroy', $categoria->id) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Tem certeza que deseja excluir esta categoria?');">
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
                        <td colspan="4" class="text-center">Nenhuma categoria cadastrada.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

