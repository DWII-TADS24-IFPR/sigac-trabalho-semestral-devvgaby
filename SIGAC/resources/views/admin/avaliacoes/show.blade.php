@extends('layouts.admin')

@section('content')
<h1>Avaliar Solicitação</h1>

<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">{{ $solicitacao->atividade }}</h5>
        <p><strong>Aluno:</strong> {{ $solicitacao->user->aluno->nome }}</p>
        <p><strong>Categoria:</strong> {{ $solicitacao->categoria->nome }}</p>
        <p><strong>Horas:</strong> {{ $solicitacao->horas }}</p>
        <p><strong>Status atual:</strong> {{ ucfirst($solicitacao->status) }}</p>
        <p><strong>Comentário:</strong> {{ $solicitacao->comentario ?? 'Nenhum' }}</p>
        <p><strong>Documento:</strong> <a href="{{ asset($solicitacao->url) }}" target="_blank">Ver arquivo</a></p>
    </div>
</div>

@if($solicitacao->status == 'pendente')
    <form action="{{ route('admin.avaliacoes.aprovar', $solicitacao->id) }}" method="POST" class="d-inline">
        @csrf
        <button type="submit" class="btn btn-success">Aprovar</button>
    </form>

    <button class="btn btn-danger" data-bs-toggle="collapse" data-bs-target="#rejeitarForm">Rejeitar</button>

    <div class="collapse mt-3" id="rejeitarForm">
        <form action="{{ route('admin.avaliacoes.rejeitar', $solicitacao->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="comentario" class="form-label">Motivo da Rejeição</label>
                <textarea name="comentario" id="comentario" rows="3" class="form-control" required>{{ old('comentario') }}</textarea>
                @error('comentario')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-danger">Enviar Rejeição</button>
        </form>
    </div>
@endif

<a href="{{ route('admin.avaliacoes.index') }}" class="btn btn-secondary mt-3">Voltar</a>

@endsection

