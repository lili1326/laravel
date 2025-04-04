<?php

use Illuminate\Support\Facades\Route;

Route::get('/movies', function () {
    $movies = [
        1 => [
            'id' => 1,
            'title' => 'Star Wars, Episode IV : A New Hope !',
            'description' => 'Hot Planet !',
            'year' => 1977,
            'director' => 'George Lucas',
            'duration' => 121
        ],
        2 => [
            'id' => 2,
            'title' => 'Star Wars, Episode V : The Empire Strikes Back !',
            'description' => 'Cold Planet !',
            'year' => 1980,
            'director' => 'Irvin Kershner',
            'duration' => 124
        ],
        3 => [
            'id' => 3,
            'title' => 'Star Wars, Episode V : The Return of The Jedi !',
            'description' => 'Cool Planet !',
            'year' => 1983,
            'director' => 'Richard Marquand',
            'duration' => 134
        ],
    ];

    // Affiche les titres avec les années
    $output = '<h1>Liste des films</h1><ul>';
    foreach ($movies as $movie) {
        $output .= '<li>' . $movie['title'] . ' (' . $movie['year'] . ')</li>';
    }
    $output .= '</ul>';

    return $output;
});

Route::get('/movie/{id_film}', function ($id_film) {
    $movies = [
        1 => [
            'id' => 1,
            'title' => 'Star Wars, Episode IV : A New Hope !',
            'description' => 'Hot Planet !',
            'year' => 1977,
            'director' => 'George Lucas',
            'duration' => 121
        ],
        2 => [
            'id' => 2,
            'title' => 'Star Wars, Episode V : The Empire Strikes Back !',
            'description' => 'Cold Planet !',
            'year' => 1980,
            'director' => 'Irvin Kershner',
            'duration' => 124
        ],
        3 => [
            'id' => 3,
            'title' => 'Star Wars, Episode V : The Return of The Jedi !',
            'description' => 'Cool Planet !',
            'year' => 1983,
            'director' => 'Richard Marquand',
            'duration' => 134
        ],
    ];

    if (!isset($movies[$id_film])) {
        abort(404, "Film introuvable !");
    }

    $movie = $movies[$id_film];

    // Affiche tous les détails du film
    $output = '<h1>' . $movie['title'] . '</h1>';
    $output .= '<p><strong>Description :</strong> ' . $movie['description'] . '</p>';
    $output .= '<p><strong>Année :</strong> ' . $movie['year'] . '</p>';
    $output .= '<p><strong>Réalisateur :</strong> ' . $movie['director'] . '</p>';
    $output .= '<p><strong>Durée :</strong> ' . $movie['duration'] . ' min</p>';

    return $output;
});

Route::get('/', function () {
    return '<h1>Hello laravel</h1>';
});

Route::get('/{name}', function (string $name) {
    return '<h1>Hello '.$name.'</h1>';
});