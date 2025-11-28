<?php

namespace Tests\Feature;

use App\Models\Movie;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MovieTest extends TestCase
{
    use RefreshDatabase;

    public function test_movies_index_page_loads()
    {
        $this->get('/movies')
            ->assertStatus(200)
            ->assertSee('Movies'); // Assumeixes que surt al Blade
    }

    public function test_we_can_create_a_movie()
    {
        $response = $this->post('/movies', [
            'title' => 'The Matrix',
            'synopsis' => 'Sci-fi action',
            'director' => 'Wachowski',
            'year' => 1999,
            'genre' => 'Sci-fi',
            'poster' => 'matrix.jpg',
        ]);

        $response->assertRedirect('/movies');

        $this->assertDatabaseHas('movies', [
            'title' => 'The Matrix',
            'director' => 'Wachowski',
        ]);
    }

    public function test_we_can_show_a_movie()
    {
        $movie = Movie::create([
            'title' => 'Inception',
            'synopsis' => 'Dream heist',
            'director' => 'Nolan',
            'year' => 2010,
            'genre' => 'Sci-fi',
            'poster' => 'inception.jpg',
        ]);

        $this->get("/movies/{$movie->id}")
            ->assertStatus(200)
            ->assertSee('Inception');
    }

    public function test_this_will_fail_intentionally()
    {
        $this->assertTrue(false, "Aquest test està forçat a fallar per provar Laravel Cloud CI.");
    }
}
