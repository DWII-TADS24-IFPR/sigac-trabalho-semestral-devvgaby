<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'SIGAC')</title>
    @vite(['resources/js/app.js'])
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">SIGAC - Sistema de Gerenciamento</a>
      </div>
    </nav>

    <main class="py-4 container">
        @yield('content')
    </main>

</body>
</html>

