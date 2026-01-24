<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/movie', function () {
    $movies = [];

    for($i = 0; $i < 10; $i++) {
        $movies[] = [
            'title' => 'Movie',
            'year' => '2026',
            'genre' => 'action',
        ];
    }

    echo "<h1>List Movie</h1>";
    
    echo "<ul>"; 
    foreach ($movies as $movie) { 
        echo "<li>" . $movie['title'] . $movie['year'] ."</li>";
    }
    echo "</ul>";
});

Route::post('/movie', function () {
    $movies[]=[
        'title' => request('tite'),
        'year' => request('year'),
        'genre' => request('genre'),
    ];
    echo "<h1>List Movie</h1>";

    echo "<ul>";
    foreach ($movies as $movie) {
        echo "<li>" . $movie['title'] . $movie['year'] . "</li>";
    }
    echo "</ul>";
});