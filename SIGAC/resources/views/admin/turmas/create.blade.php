@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Nova Turma</h2>

    <form action="{{ route('admin.turmas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="ano" class="form-label">Ano</label>
            <input type="text" name="ano" id="ano" class="form-control @error('ano') is-invalid @enderror" value="{{ old('ano') }}">
            @error('ano') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="curso_id" class="form-label">Curso</label>
            <select name="curso_id" id="curso_id" class="form-select @error('curso_id') is-invalid @enderror">
                <option value="">Selecione um curso</option>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}" {{ old('curso_id') == $curso->id ? 'selected' : '' }}>
                        {{ $curso->nome }}
                    </option>
                @endforeach
            </select>
            @error('curso_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-check-circle"></i> Salvar
        </button>
        <a href="{{ route('admin.turmas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

