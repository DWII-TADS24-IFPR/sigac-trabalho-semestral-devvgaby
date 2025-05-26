@extends('layouts.aluno')

@section('content')
<h1>Nova Solicitação de Horas</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('aluno.solicitacoes.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="atividade">Atividade</label>
        <input type="text" class="form-control" name="atividade" required>
    </div>

    <div class="mb-3">
        <label for="horas">Horas</label>
        <input type="number" step="0.1" class="form-control" name="horas_in" required>
    </div>

    <div class="mb-3">
        <label for="categoria">Categoria</label>
        <select name="categoria_id" class="form-control" required>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="arquivo">Comprovante (PDF)</label>
        <input type="file" class="form-control" name="arquivo" accept="application/pdf" required>
    </div>

    <button type="submit" class="btn btn-success">Enviar Solicitação</button>
</form>
@endsection

