@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Editar Eixo</h2>

    <form action="{{ route('admin.eixos.update', $eixo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Eixo</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $eixo->nome) }}" required>
            @error('nome')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('admin.eixos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

