@extends('layouts.aluno')

@section('content')
<h1>Detalhes da Solicitação</h1>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $solicitacao->atividade }}</h5>

        <p><strong>Categoria:</strong> {{ $solicitacao->categoria->nome }}</p>
        <p><strong>Horas Solicitadas:</strong> {{ $solicitacao->horas_in }}</p>

        @if($solicitacao->horas_out && $solicitacao->status == 'aprovado')
            <p><strong>Horas Aprovadas:</strong> {{ $solicitacao->horas_out }}</p>
        @endif

        <p><strong>Status:</strong>
            @if($solicitacao->status == 'aprovado')
                <span class="badge bg-success">Aprovado</span>
            @elseif($solicitacao->status == 'rejeitado')
                <span class="badge bg-danger">Rejeitado</span>
            @else
                <span class="badge bg-warning text-dark">Pendente</span>
            @endif
        </p>

        @if($solicitacao->comentario)
            <p><strong>Comentário do Avaliador:</strong> {{ $solicitacao->comentario }}</p>
        @endif

        <p><strong>Comprovante:</strong> 
            <a href="{{ asset('storage/' . $solicitacao->url) }}" target="_blank">Abrir arquivo</a>
        </p>

        <a href="{{ route('aluno.solicitacoes.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</div>
@endsection

