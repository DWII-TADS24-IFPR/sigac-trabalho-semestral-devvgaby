<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Declaração</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 14px; }
        h1 { text-align: center; font-size: 22px; }
        .info { margin-top: 30px; line-height: 1.6; }
    </style>
</head>
<body>
    <h1>Declaração de Cumprimento de Horas</h1>

    <div class="info">
        <p>Declaramos que o(a) aluno(a) <strong>{{ $aluno->nome }}</strong>, portador(a) do CPF <strong>{{ $aluno->cpf }}</strong>,
        cumpriu o total de <strong>{{ $totalHoras }}</strong> horas complementares no curso de <strong>{{ $aluno->curso->nome }}</strong>.</p>

        <p>Esta declaração foi emitida em {{ \Carbon\Carbon::parse($declaracao->data)->format('d/m/Y H:i') }}.</p>

        <p><strong>Hash de autenticação:</strong> {{ $declaracao->hash }}</p>
    </div>

    <p style="margin-top: 60px;">__________________________________________<br>Assinatura da Coordenação</p>
</body>
</html>

