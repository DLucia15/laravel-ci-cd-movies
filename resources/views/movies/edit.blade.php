@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <h2 class="mb-3">Editar Película</h2>
        <form action="{{ route('movies.update', $movie) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Título</label>
                    <input type="text" name="title" class="form-control" value="{{ $movie->title }}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Director</label>
                    <input type="text" name="director" class="form-control" value="{{ $movie->director }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">Año</label>
                    <input type="number" name="year" class="form-control" value="{{ $movie->year }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Género</label>
                    <input type="text" name="genre" class="form-control" value="{{ $movie->genre }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Poster (URL)</label>
                    <input type="text" name="poster" class="form-control" value="{{ $movie->poster }}">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Sinopsis</label>
                <textarea name="synopsis" class="form-control" rows="3">{{ $movie->synopsis }}</textarea>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('movies.index') }}" class="btn btn-secondary">Volver</a>
                <button class="btn btn-success">Actualizar</button>
            </div>
        </form>
    </div>
</div>
@endsection
