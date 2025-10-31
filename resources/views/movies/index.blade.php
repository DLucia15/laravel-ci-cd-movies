@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Listado de Películas</h2>

    @if($movies->count())
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach($movies as $movie)
        <div class="col">
            <div class="card h-100 shadow-sm">
                @if($movie->poster)
                    <img src="{{ $movie->poster }}" class="card-img-top" alt="{{ $movie->title }}">
                @else
                    <img src="" class="card-img-top" alt="Sin póster">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text text-muted mb-1"><strong>Director:</strong> {{ $movie->director }}</p>
                    <p class="card-text text-muted mb-1"><strong>Año:</strong> {{ $movie->year }}</p>
                    <p class="card-text text-muted"><strong>Género:</strong> {{ $movie->genre }}</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('movies.show', $movie) }}" class="btn btn-sm btn-info">Ver</a>
                    <a href="{{ route('movies.edit', $movie) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('movies.destroy', $movie) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar esta película?')">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $movies->links() }}
    </div>
    @else
    <p class="text-muted">No hay películas registradas.</p>
    @endif
</div>
@endsection