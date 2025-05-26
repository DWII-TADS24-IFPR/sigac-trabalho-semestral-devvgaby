@extends('layouts.admin')

@section('content')
    <h1>Solicitações de Horas Complementares</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-responsive">
        <thead>
            <tr>
                <th>Aluno</th>
                <th>Atividade</th>
                <th>Categoria</th>
                <th>Horas Solicitadas</th>
                <th>Status</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($solicitacoes as $doc)
                <tr>
                    <td>{{ $doc->user->aluno->nome ?? 'Aluno não encontrado' }}</td>
                    <td>{{ $doc->atividade }}</td>
                    <td>{{ $doc->categoria->nome ?? 'Categoria não encontrada' }}</td>
                    <td>{{ $doc->horas_in }}</td>
                    <td>
                        @php
                            $status = strtolower($doc->status);
                        @endphp
                        <span class="
                            @if($status == 'aprovado') badge bg-success
                            @elseif($status == 'rejeitado') badge bg-danger
                            @else badge bg-warning text-dark
                            @endif
                        ">
                            {{ ucfirst($status) }}
                        </span>
                    </td>
                    <td>{{ $doc->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('admin.avaliacoes.show', $doc->id) }}" class="btn btn-primary btn-sm">Avaliar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $solicitacoes->links() }}

@endsection
