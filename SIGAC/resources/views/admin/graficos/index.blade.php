@extends('layouts.admin')

@section('content')
    <h1 class="mb-4 fw-bold text-primary">Gráfico de Horas Complementares por Aluno - Turma</h1>

    <form method="GET" action="{{ route('admin.graficos.index') }}" class="mb-5 d-flex flex-wrap align-items-center gap-3">
        <label for="turma_id" class="form-label mb-0 fw-semibold" style="min-width: 160px; font-size: 1.1rem;">
            Selecione a Turma:
        </label>
        <select name="turma_id" id="turma_id" class="form-select w-auto shadow-sm" style="min-width: 300px;" onchange="this.form.submit()">
            <option value="">-- Selecione --</option>
            @foreach($turmas as $turma)
                <option value="{{ $turma->id }}" {{ ($turma_id == $turma->id) ? 'selected' : '' }}>
                    {{ $turma->curso->nome ?? 'Turma ' . $turma->id }} - {{ $turma->ano }}
                </option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary px-4 shadow-sm">
            <i class="bi bi-bar-chart-line-fill me-2"></i> Carregar
        </button>
    </form>

    @if(!empty($dadosGrafico))
        <div class="card shadow-sm p-4">
            <canvas id="graficoHoras" width="800" height="400"></canvas>
        </div>
    @else
        <p class="text-muted fst-italic">Selecione uma turma para exibir o gráfico.</p>
    @endif
@endsection

@push('scripts')
    @if(!empty($dadosGrafico))
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('graficoHoras').getContext('2d');
            const nomes = @json(array_column($dadosGrafico, 'nome'));
            const horas = @json(array_column($dadosGrafico, 'horas'));

            const grafico = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: nomes,
                    datasets: [{
                        label: 'Horas Complementares',
                        data: horas,
                        backgroundColor: 'rgba(13, 110, 253, 0.7)', // Bootstrap primary blue com transparência
                        borderColor: 'rgba(13, 110, 253, 1)',
                        borderWidth: 1,
                        borderRadius: 5, // cantos arredondados nas barras
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            labels: {
                                font: {
                                    size: 14,
                                    weight: '600'
                                }
                            }
                        },
                        tooltip: {
                            enabled: true,
                            backgroundColor: '#0d6efd',
                            titleFont: { weight: 'bold' }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Horas',
                                font: { size: 14, weight: '600' },
                                color: '#0d6efd'
                            },
                            ticks: {
                                stepSize: 1,
                                font: { size: 12 }
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Alunos',
                                font: { size: 14, weight: '600' },
                                color: '#0d6efd'
                            },
                            ticks: {
                                font: { size: 12 }
                            }
                        }
                    }
                }
            });
        </script>
    @endif
@endpush

 

