@extends('layouts.aluno')

@section('title', 'Visualizar Declaração')
@section('page-title', 'Declaração')

@section('content')
    <div class="card">
        <div class="card-header">Declaração Emitida</div>
        <div class="card-body">
            <p><strong>Data:</strong> {{ \Carbon\Carbon::parse($declaracao->data)->format('d/m/Y H:i') }}</p>
            <p><strong>Hash:</strong> {{ $declaracao->hash }}</p>
            <p>Você pode gerar uma nova declaração em PDF na tela anterior.</p>
        </div>
    </div>
@endsection

