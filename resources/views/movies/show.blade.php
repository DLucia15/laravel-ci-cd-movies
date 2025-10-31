@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <h2 class="mb-3">{{ $movie->title }}</h2>
        @if($movie->poster)
        <img src="{{ $movie->poster }}" alt="{{ $movie->title }}" class="img-fluid mb-3 rounded" style="max-width: 200px;">
        @endif
        <ul class="list-group mb-3">
            <li class="list-group-item"><strong>Director:</strong> {{ $movie->director }}</li>
            <li class="list-group-item"><strong>Año:</strong> {{ $movie->year }}</li>
            <li class="list-group-item"><strong>Género:</strong> {{ $movie->genre }}</li>
        </ul>
        <p><strong>Sinopsis:</strong> {{ $movie->synopsis }}</p>
        <div class="d-flex justify-content-between">
            <a href="{{ route('movies.index') }}" class="btn btn-secondary">Volver</a>
            <a href="{{ route('movies.edit', $movie) }}" class="btn btn-warning">Editar</a>
        </div>
    </div>
</div>
@endsection
