@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Lista de Eixos</h2>
        <a href="{{ route('admin.eixos.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Novo Eixo
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
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($eixos as $eixo)
                    <tr>
                        <td>{{ $eixo->nome }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.eixos.edit', $eixo->id) }}" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i> Editar
                            </a>
                            <form action="{{ route('admin.eixos.destroy', $eixo->id) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Tem certeza que deseja excluir este eixo?');">
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
                        <td colspan="2" class="text-center">Nenhum eixo cadastrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection


