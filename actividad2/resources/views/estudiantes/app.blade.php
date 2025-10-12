<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Gestión de Estudiantes')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Estilos personalizados (opcional) --}}
    <style>
        body {
            background-color: #f8f9fa;
        }
        footer {
            background-color: #212529;
            color: #fff;
            padding: 10px 0;
            margin-top: 40px;
            text-align: center;
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('estudiantes.index') }}">📚 Estudiantes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarNav" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('estudiantes.index') }}">Inicio</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Contenido dinámico --}}
    <main class="container py-5">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="d-flex justify-content-between align-items-center px-4 py-2 bg-dark text-white">
    <span>© {{ date('Y') }} Gestión de Estudiantes - Laravel</span>
    <span>Desarrollado por: Limbert Olmos M.</span>
</footer>

    {{-- JS de Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
