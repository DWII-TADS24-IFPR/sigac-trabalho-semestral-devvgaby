@extends('layouts.app')

@section('title', 'Cadastro de Aluno')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card shadow-sm rounded">
            <div class="card-header bg-primary text-white text-center">
                <h3>Cadastro de Aluno</h3>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="text" name="nome" id="nome" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}" placeholder="Nome completo" required autofocus>
                        <label for="nome">Nome Completo</label>
                        @error('nome')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="E-mail institucional" required>
                        <label for="email">E-mail Institucional</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="cpf" id="cpf" class="form-control @error('cpf') is-invalid @enderror" value="{{ old('cpf') }}" placeholder="CPF" required>
                        <label for="cpf">CPF</label>
                        @error('cpf')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Senha" required>
                        <label for="password">Senha</label>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-4">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirme a senha" required>
                        <label for="password_confirmation">Confirmar Senha</label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
                </form>
            </div>
        </div>

        <div class="text-center mt-3">
            <small>Já tem conta? <a href="{{ route('login') }}">Entrar</a></small>
        </div>
    </div>
</div>
@endsection

