@extends('layouts.app')

@section('content')
<div class="container text-center py-5">
    <h1 class="display-4 mb-4">🎬 Bienvenido a MovieVerse</h1>
    <p class="lead mb-5">Explora, edita y gestiona tu colección de películas favoritas.</p>
    <a href="{{ route('movies.index') }}" class="btn btn-primary btn-lg">
        Ver listado de películas
    </a>
</div>
@endsection