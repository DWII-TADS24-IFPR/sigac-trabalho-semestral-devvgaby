<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Admin')</title>

    @vite(['resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    @stack('styles')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-dark bg-dark sticky-top">
                <div class="container-fluid">
                    <a class="navbar-brand d-flex align-items-center" href="{{ route('admin.dashboard') }}">
                        <i class="bi bi-house-door-fill me-2"></i> 
                        SIGAC
                    </a>
                    
                    <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target=".sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>

            <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="position-sticky pt-3">
                    <h5 class="text-white px-3">Painel Administrativo</h5>
                    <div class="accordion" id="sidebarAccordion">

                        <div class="accordion-item bg-dark border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-dark text-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseAlunos">
                                    Alunos
                                </button>
                            </h2>
                            <div id="collapseAlunos" class="accordion-collapse collapse"
                                data-bs-parent="#sidebarAccordion">
                                <div class="accordion-body p-0">
                                    <ul class="nav flex-column ms-3">
                                        <li class="nav-item"><a class="nav-link text-white"
                                                href="{{ route('admin.alunos.create') }}">➕ Adicionar</a></li>
                                        <li class="nav-item"><a class="nav-link text-white"
                                                href="{{ route('admin.alunos.index') }}">📋 Ver Alunos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item bg-dark border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-dark text-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseCursos">
                                    Cursos
                                </button>
                            </h2>
                            <div id="collapseCursos" class="accordion-collapse collapse"
                                data-bs-parent="#sidebarAccordion">
                                <div class="accordion-body p-0">
                                    <ul class="nav flex-column ms-3">
                                        <li class="nav-item"><a class="nav-link text-white"
                                                href="{{ route('admin.cursos.create') }}">➕ Adicionar</a></li>
                                        <li class="nav-item"><a class="nav-link text-white"
                                                href="{{ route('admin.cursos.index') }}">📋 Ver Cursos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item bg-dark border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-dark text-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTurmas">
                                    Turmas
                                </button>
                            </h2>
                            <div id="collapseTurmas" class="accordion-collapse collapse"
                                data-bs-parent="#sidebarAccordion">
                                <div class="accordion-body p-0">
                                    <ul class="nav flex-column ms-3">
                                        <li class="nav-item"><a class="nav-link text-white"
                                                href="{{ route('admin.turmas.create') }}">➕ Adicionar</a></li>
                                        <li class="nav-item"><a class="nav-link text-white"
                                                href="{{ route('admin.turmas.index') }}">📋 Ver Turmas</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item bg-dark border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-dark text-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseEixos">
                                    Eixos
                                </button>
                            </h2>
                            <div id="collapseEixos" class="accordion-collapse collapse"
                                data-bs-parent="#sidebarAccordion">
                                <div class="accordion-body p-0">
                                    <ul class="nav flex-column ms-3">
                                        <li class="nav-item"><a class="nav-link text-white"
                                                href="{{ route('admin.eixos.create') }}">➕ Adicionar</a></li>
                                        <li class="nav-item"><a class="nav-link text-white"
                                                href="{{ route('admin.eixos.index') }}">📋 Ver Eixos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item bg-dark border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-dark text-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseNiveis">
                                    Níveis
                                </button>
                            </h2>
                            <div id="collapseNiveis" class="accordion-collapse collapse"
                                data-bs-parent="#sidebarAccordion">
                                <div class="accordion-body p-0">
                                    <ul class="nav flex-column ms-3">
                                        <li class="nav-item"><a class="nav-link text-white"
                                                href="{{ route('admin.niveis.create') }}">➕ Adicionar</a></li>
                                        <li class="nav-item"><a class="nav-link text-white"
                                                href="{{ route('admin.niveis.index') }}">📋 Ver Níveis</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item bg-dark border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-dark text-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseCategorias">
                                    Categorias
                                </button>
                            </h2>
                            <div id="collapseCategorias" class="accordion-collapse collapse"
                                data-bs-parent="#sidebarAccordion">
                                <div class="accordion-body p-0">
                                    <ul class="nav flex-column ms-3">
                                        <li class="nav-item"><a class="nav-link text-white"
                                                href="{{ route('admin.categorias.create') }}">➕ Adicionar</a></li>
                                        <li class="nav-item"><a class="nav-link text-white"
                                                href="{{ route('admin.categorias.index') }}">📋 Ver Categorias</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item bg-dark border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-dark text-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseAvaliacoes">
                                    Avaliações
                                </button>
                            </h2>
                            <div id="collapseAvaliacoes" class="accordion-collapse collapse"
                                data-bs-parent="#sidebarAccordion">
                                <div class="accordion-body p-0">
                                    <ul class="nav flex-column ms-3">
                                        <li class="nav-item"><a class="nav-link text-white"
                                                href="{{ route('admin.avaliacoes.index') }}">📋 Avaliar Solicitações</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <li class="nav-item mt-3">
                            <a class="nav-link text-white px-3" href="{{ route('admin.graficos.index') }}">
                                📊 Gráficos
                            </a>
                        </li>
                    </div>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1 class="h4">@yield('page-title', 'Dashboard')</h1>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-light bg-danger text-white">Logout</button>
                    </form>
                </div>

                @yield('content')

                 <footer class="mt-5 pt-3 border-top text-center text-muted">
                    &copy; {{ date('Y') }} SIGAC - Dashboard Administrativo
                </footer>
            </main>
        </div>
        
    </div>

    @stack('scripts')
</body>

</html>
