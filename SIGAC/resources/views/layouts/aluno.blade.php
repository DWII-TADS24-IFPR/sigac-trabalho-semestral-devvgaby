<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Aluno')</title>

    @vite(['resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-dark bg-primary sticky-top shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('aluno.dashboard') }}">
                <i class="bi bi-person-circle me-2"></i> SIGAC - Aluno
            </a>
            <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar"
                aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse vh-100 border-end overflow-auto">
                <div class="pt-3">
                    <h5 class="text-primary px-3 mb-3 fw-bold">Menu do Aluno</h5>

                    <div class="accordion" id="sidebarAccordionAluno">

                        <div class="accordion-item border-0">
                            <h2 class="accordion-header" id="headingSolicitacoes">
                                <button
                                    class="accordion-button collapsed text-primary fw-semibold"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSolicitacoes"
                                    aria-expanded="false"
                                    aria-controls="collapseSolicitacoes"
                                >
                                    <i class="bi bi-file-earmark-text me-2"></i> Solicitações
                                </button>
                            </h2>
                            <div
                                id="collapseSolicitacoes"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingSolicitacoes"
                                data-bs-parent="#sidebarAccordionAluno"
                            >
                                <div class="accordion-body p-0">
                                    <ul class="nav flex-column ms-4">
                                        <li class="nav-item">
                                            <a
                                                class="nav-link text-primary"
                                                href="{{ route('aluno.solicitacoes.create') }}"
                                            >
                                                ➕ Nova Solicitação
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link text-primary"
                                                href="{{ route('aluno.solicitacoes.index') }}"
                                            >
                                                📋 Minhas Solicitações
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0">
                            <h2 class="accordion-header" id="headingDeclaracoes">
                                <button
                                    class="accordion-button collapsed text-primary fw-semibold"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseDeclaracoes"
                                    aria-expanded="false"
                                    aria-controls="collapseDeclaracoes"
                                >
                                    <i class="bi bi-file-earmark-medical me-2"></i> Declarações
                                </button>
                            </h2>
                            <div
                                id="collapseDeclaracoes"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingDeclaracoes"
                                data-bs-parent="#sidebarAccordionAluno"
                            >
                                <div class="accordion-body p-0">
                                    <ul class="nav flex-column ms-4">
                                        <li class="nav-item">
                                            <a
                                                class="nav-link text-primary"
                                                href="{{ route('aluno.declaracoes.index') }}"
                                            >
                                                📄 Minhas Declarações
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <ul class="nav flex-column mt-4 px-3">
                        <li class="nav-item">
                            <a class="nav-link text-primary fw-semibold" href="{{ route('aluno.cadastro.index') }}">
                                <i class="bi bi-person me-2"></i> Meu Perfil
                            </a>
                        </li>
                    </ul>

                    <li class="nav-item mt-4 px-3">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button
                                type="submit"
                                class="btn btn-outline-primary w-100 fw-semibold"
                            >
                                <i class="bi bi-box-arrow-right me-1"></i> Sair
                            </button>
                        </form>
                    </li>

                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <h1 class="h4 mb-4 text-primary fw-bold">@yield('page-title', 'Dashboard do Aluno')</h1>
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>

