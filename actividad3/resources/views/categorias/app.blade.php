<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Gestión de Categorías')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

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
        /* 🎨 Estilo para todos los iconos interactivos */
        .icon-hover {
            opacity: 0.85;
            transition: all 0.2s ease-in-out;
            font-weight:100
        }

        .icon-hover:hover i {
            opacity: 1;
            transform: scale(1.2);
            transition: transform 0.2s ease-in-out;
        }

        .icon-hover i {
            text-shadow: 0 0 1px currentColor;
            font-size: 1.2rem; 
            display: inline-block; 
        }

    </style>
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('categorias.index') }}">CRUD de Categorías</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarNav" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('categorias.index') }}">Inicio</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Contenido dinámico --}}
    <main class="container py-5">
        {{-- Mensajes flash --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="d-flex justify-content-between align-items-center px-4 py-2 bg-dark text-white">
    <span>© {{ date('Y') }} CRUD de Categorías</span>
    <span>Desarrollado por: Limbert Olmos M.</span>
</footer>

    {{-- JS de Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
