<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'SIGAC')</title>
    @vite(['resources/js/app.js'])

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        footer {
            background-color: #003366;
            color: #fff;
            padding: 20px 0;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            margin-top: 10px;
            padding-top: 10px;
            font-size: 0.875rem;
            text-align: center;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #003366;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">SIGAC</a>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="mt-auto">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <h6>Instituição</h6>
                    <p>Universidade Federal XYZ<br>Sistema SIGAC</p>
                </div>
                <div class="col-md-4 mb-2">
                    <h6>Contato</h6>
                    <p>Email: suporte@sigac.edu.br<br>Telefone: (00) 1234-5678</p>
                </div>
                <div class="col-md-4 mb-2">
                    <h6>Desenvolvido por</h6>
                    <p>Equipe de Sistemas Acadêmicos<br>Projeto Integrador</p>
                </div>
            </div>

            <div class="footer-bottom">
                &copy; {{ date('Y') }} SIGAC - Todos os direitos reservados.
            </div>
        </div>
    </footer>

</body>
</html>


