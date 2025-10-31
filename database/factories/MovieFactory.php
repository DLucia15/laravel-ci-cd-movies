<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3), // Título de 3 palabras
            'synopsis' => $this->faker->paragraph(), // Sinopsis
            'director' => $this->faker->name(), // Nombre del director
            'year' => $this->faker->year(), // Año
            'genre' => $this->faker->randomElement(['Action', 'Comedy', 'Drama', 'Horror', 'Sci-Fi']), // Género
            'poster' => $this->faker->imageUrl(300, 450, 'movies', true), // URL de imagen de póster
        ];
    }
}
