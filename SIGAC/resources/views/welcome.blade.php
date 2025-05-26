@extends('layouts.app')

@section('title', 'Bem-vindo ao SIGAC')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center" style="min-height: 70vh;">
    <h1 class="display-4 text-primary mb-3 text-center">Bem-vindo ao SIGAC</h1>
    <p class="lead text-center mb-4">
        Sistema de Gerenciamento Acadêmico Completo para Alunos e Administradores.
    </p>

    <div class="d-flex gap-3">
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4">
            Entrar
        </a>
        <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg px-4">
            Cadastre-se
        </a>
    </div>
</div>
@endsection

