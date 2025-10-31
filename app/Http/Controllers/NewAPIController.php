<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewAPIController extends Controller
{
    public function index()
    {
        return Movie::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();

        foreach ($data as $movieData) {
            Movie::create($movieData);
        }

        return response()->json(['message' => 'Películas creadas'], 201);
    }

    public function show($id)
    {
        return Movie::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        return response()->json($movie, 200);
    }

    public function destroy($id)
    {
        Movie::destroy($id);
        return response()->json(null, 204);
    }
}