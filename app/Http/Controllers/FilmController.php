<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    private function getFilmovi()
    {
        return [
            1 => ['id'=>1, 'naslov'=>'Inception', 'reziser'=>'Christopher Nolan', 'godina'=>2010, 'zanr'=>'Sci-Fi'],
            2 => ['id'=>2, 'naslov'=>'The Dark Knight', 'reziser'=>'Christopher Nolan', 'godina'=>2008, 'zanr'=>'Action'],
            3 => ['id'=>3, 'naslov'=>'Interstellar', 'reziser'=>'Christopher Nolan', 'godina'=>2014, 'zanr'=>'Sci-Fi'],
            4 => ['id'=>4, 'naslov'=>'Titanic', 'reziser'=>'James Cameron', 'godina'=>1997, 'zanr'=>'Romance'],
            5 => ['id'=>5, 'naslov'=>'Avatar', 'reziser'=>'James Cameron', 'godina'=>2009, 'zanr'=>'Sci-Fi'],
            6 => ['id'=>6, 'naslov'=>'Gladiator', 'reziser'=>'Ridley Scott', 'godina'=>2000, 'zanr'=>'Drama'],
        ];
    }

    public function index()
    {
        $filmovi = $this->getFilmovi();

        return view('filmovi.index', compact('filmovi'));
    }

    public function show($id)
    {
        $filmovi = $this->getFilmovi();

        if (!isset($filmovi[$id])) {
            abort(404);
        }

        $film = $filmovi[$id];

        return view('filmovi.show', compact('film'));
    }
}