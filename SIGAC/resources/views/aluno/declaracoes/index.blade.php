@extends('layouts.aluno')

@section('title', 'Minhas Declarações')
@section('page-title', 'Minhas Declarações')

@section('content')
    @if(session('error'))
        <div class="alert alert-warning">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('aluno.declaracoes.store') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success mb-3">
            <i class="bi bi-file-earmark-arrow-down"></i> Emitir Nova Declaração
        </button>
    </form>

    <div class="card">
        <div class="card-header">Histórico de Declarações Emitidas</div>
        <div class="card-body">
            @if($declaracoes->isEmpty())
                <p>Nenhuma declaração emitida ainda.</p>
            @else
                <ul class="list-group">
                    @foreach($declaracoes as $declaracao)
                        <li class="list-group-item d-flex justify-content-between">
                            <span>
                                Emitida em: {{ \Carbon\Carbon::parse($declaracao->data)->format('d/m/Y H:i') }}<br>
                                Hash: {{ $declaracao->hash }}
                            </span>
                            <a href="{{ route('aluno.declaracoes.show', $declaracao->id) }}" class="btn btn-primary btn-sm">
                                Ver
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection
