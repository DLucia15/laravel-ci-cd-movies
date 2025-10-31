<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Movies App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('movies.index') }}">Movies App</a>
            <a href="{{ route('movies.create') }}" class="btn btn-outline-light btn-sm">Nueva Película</a>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
