@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Editar Curso</h2>

    <form action="{{ route('admin.cursos.update', $curso->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" 
                   class="form-control @error('nome') is-invalid @enderror" 
                   value="{{ old('nome', $curso->nome) }}">
            @error('nome')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sigla" class="form-label">Sigla</label>
            <input type="text" name="sigla" id="sigla" 
                   class="form-control @error('sigla') is-invalid @enderror" 
                   value="{{ old('sigla', $curso->sigla) }}">
            @error('sigla')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="total_horas" class="form-label">Total de Horas</label>
            <input type="number" name="total_horas" id="total_horas" 
                   class="form-control @error('total_horas') is-invalid @enderror" 
                   value="{{ old('total_horas', $curso->total_horas) }}">
            @error('total_horas')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nivel_id" class="form-label">Nível</label>
            <select name="nivel_id" id="nivel_id" 
                    class="form-select @error('nivel_id') is-invalid @enderror">
                <option value="">Selecione o nível</option>
                @foreach($nivels as $nivel)
                    <option value="{{ $nivel->id }}" {{ (old('nivel_id', $curso->nivel_id) == $nivel->id) ? 'selected' : '' }}>
                        {{ $nivel->nome }}
                    </option>
                @endforeach
            </select>
            @error('nivel_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="eixo_id" class="form-label">Eixo</label>
            <select name="eixo_id" id="eixo_id" 
                    class="form-select @error('eixo_id') is-invalid @enderror">
                <option value="">Selecione o eixo</option>
                @foreach($eixos as $eixo)
                    <option value="{{ $eixo->id }}" {{ (old('eixo_id', $curso->eixo_id) == $eixo->id) ? 'selected' : '' }}>
                        {{ $eixo->nome }}
                    </option>
                @endforeach
            </select>
            @error('eixo_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('admin.cursos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
