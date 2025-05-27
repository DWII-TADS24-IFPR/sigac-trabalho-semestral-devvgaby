@extends('layouts.aluno')

@section('title', 'Dashboard Aluno')
@section('page-title', 'Meu Painel')

@section('content')
 <h4 class="mb-4">Olá, {{ Auth::user()->name }}! 👋</h4>
<div class="row g-4">
    <div class="col-md-4">
        <div class="card text-white bg-success shadow-sm rounded">
            <div class="card-body">
                <h5 class="card-title fw-semibold">Horas Validadas</h5>
                <p class="card-text fs-3 mb-0">40</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-dark bg-warning shadow-sm rounded">
            <div class="card-body">
                <h5 class="card-title fw-semibold">Horas Pendentes</h5>
                <p class="card-text fs-3 mb-0">12</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-secondary shadow-sm rounded">
            <div class="card-body">
                <h5 class="card-title fw-semibold">Horas Restantes</h5>
                <p class="card-text fs-3 mb-0">28</p>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="card shadow-sm rounded">
            <div class="card-body">
                <h5 class="card-title fw-semibold">Progresso</h5>
                <div class="progress" style="height: 25px;">
                    <div class="progress-bar bg-success fs-5 d-flex align-items-center justify-content-center" role="progressbar" style="width: 58%;" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                        58%
                    </div>
                </div>
                <small class="text-muted mt-2 d-block">Você completou 58% das horas obrigatórias.</small>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4 g-4">
    <div class="col-md-6">
        <div class="card shadow-sm rounded h-100">
            <div class="card-body">
                <h5 class="card-title fw-semibold">Última Solicitação</h5>
                <p><strong>Atividade:</strong> Curso de Extensão</p>
                <p><strong>Horas Solicitadas:</strong> 10h</p>
                <p><strong>Status:</strong> <span class="badge bg-info">Em Análise</span></p>
                <p><strong>Data:</strong> 20/05/2025</p>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow-sm rounded h-100 d-flex flex-column justify-content-center">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-3">Acesso Rápido</h5>
                <a href="{{ route('aluno.solicitacoes.create') }}" class="btn btn-primary w-100 mb-3">
                    <i class="bi bi-plus-lg me-2"></i> Nova Solicitação
                </a>
                <a href="{{ route('aluno.solicitacoes.index') }}" class="btn btn-outline-primary w-100 mb-3">
                    <i class="bi bi-card-list me-2"></i> Ver Minhas Solicitações
                </a>
                <a href="{{ route('aluno.declaracoes.index') }}" class="btn btn-outline-secondary w-100">
                    <i class="bi bi-file-earmark-text me-2"></i> Minhas Declarações
                </a>
            </div>
        </div>
    </div>
</div>
@endsection


