@extends('layouts.admin')

@section('title', 'Dashboard Admin')
@section('page-title', 'Dashboard')

@section('content')
     <h4 class="mb-4">Olá, {{ Auth::user()->name }}! 👋</h4>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Alunos cadastrados</h5>
                    <p class="card-text fs-4">150</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h5 class="card-title">Solicitações pendentes</h5>
                    <p class="card-text fs-4">5</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Horas validadas hoje</h5>
                    <p class="card-text fs-4">12</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <h5>% de alunos que cumpriram as horas</h5>
                    <p class="fs-3">75%</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <h5>Alunos por Eixo</h5>
                    <canvas id="chartEixo"></canvas>
                </div>
            </div>
        </div>
    </div>

    
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('chartEixo');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Eixo 1', 'Eixo 2', 'Eixo 3', 'Eixo 4'],
            datasets: [{
                label: 'Alunos',
                data: [30, 45, 60, 75],
                backgroundColor: 'rgba(54, 162, 235, 0.7)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>
@endpush

