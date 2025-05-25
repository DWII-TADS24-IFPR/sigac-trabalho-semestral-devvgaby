@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Cadastrar Novo Nível</h2>

    <form action="{{ route('admin.niveis.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Nível</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" required>
            @error('nome')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('admin.niveis.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

