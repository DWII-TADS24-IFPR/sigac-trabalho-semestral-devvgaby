@extends('layouts.aluno')

@section('content')
<h1>Minhas Solicitações de Horas</h1>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($solicitacoes->count() > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Atividade</th>
                <th>Categoria</th>
                <th>Horas Solicitadas</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($solicitacoes as $solicitacao)
                <tr>
                    <td>{{ $solicitacao->atividade }}</td>
                    <td>{{ $solicitacao->categoria->nome }}</td>
                    <td>{{ $solicitacao->horas_in }}</td>
                    <td>
                        @if($solicitacao->status == 'aprovado')
                            <span class="badge bg-success">Aprovado</span>
                        @elseif($solicitacao->status == 'rejeitado')
                            <span class="badge bg-danger">Rejeitado</span>
                        @else
                            <span class="badge bg-warning text-dark">Pendente</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('aluno.solicitacoes.show', $solicitacao->id) }}" class="btn btn-primary btn-sm">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $solicitacoes->links() }} 
@else
    <p>Você ainda não fez nenhuma solicitação.</p>
@endif

@endsection
