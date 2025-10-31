<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    public function run()
    {
        $movies = [
            ['title' => 'Inception', 'director' => 'Christopher Nolan', 'genre' => 'Sci-Fi', 'year' => 2010, 'poster' => 'https://m.media-amazon.com/images/I/912AErFSBHL._AC_UF894,1000_QL80_.jpg'],
            ['title' => 'The Godfather', 'director' => 'Francis Ford Coppola', 'genre' => 'Crime', 'year' => 1972, 'poster' => 'https://play-lh.googleusercontent.com/ZucjGxDqQ-cHIN-8YA1HgZx7dFhXkfnz73SrdRPmOOHEax08sngqZMR_jMKq0sZuv5P7-T2Z2aHJ1uGQiys'],
            ['title' => 'Pulp Fiction', 'director' => 'Quentin Tarantino', 'genre' => 'Crime', 'year' => 1994, 'poster' => 'https://m.media-amazon.com/images/I/81UTs3sC5hL._AC_UF1000,1000_QL80_.jpg'],
            ['title' => 'Nightmare Before Christmas', 'director' => 'Tim Burton', 'genre' => 'Infantil', 'year' => 1993, 'poster' => 'https://pics.filmaffinity.com/Pesadilla_antes_de_Navidad-136057718-large.jpg'],
            ['title' => 'Fight Club', 'director' => 'David Fincher', 'genre' => 'Drama', 'year' => 1999, 'poster' => 'https://m.media-amazon.com/images/S/pv-target-images/e9a43e647b2ca70e75a3c0af046c4dfdcd712380889779cbdc2c57d94ab63902.jpg'],
        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}