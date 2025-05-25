@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Editar Categoria</h2>

    <form action="{{ route('admin.categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $categoria->nome) }}" required>
            @error('nome')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="maximo_horas" class="form-label">Máximo de Horas</label>
            <input type="number" class="form-control" id="maximo_horas" name="maximo_horas" value="{{ old('maximo_horas', $categoria->maximo_horas) }}" required>
            @error('maximo_horas')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="curso_id" class="form-label">Curso</label>
            <select name="curso_id" id="curso_id" class="form-select" required>
                <option value="">Selecione...</option>
                @foreach ($cursos as $curso)
                    <option value="{{ $curso->id }}" {{ old('curso_id', $categoria->curso_id) == $curso->id ? 'selected' : '' }}>
                        {{ $curso->nome }}
                    </option>
                @endforeach
            </select>
            @error('curso_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('admin.categorias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

