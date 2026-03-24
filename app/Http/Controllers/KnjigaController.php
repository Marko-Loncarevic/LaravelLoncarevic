<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KnjigaController extends Controller
{
    public function index()
    {
        $knjige = [
            ['naslov' => '1984', 'autor' => 'George Orwell', 'godina' => 1949],
            ['naslov' => 'The Hobbit', 'autor' => 'J.R.R. Tolkien', 'godina' => 1937],
            ['naslov' => 'Clean Code', 'autor' => 'Robert C. Martin', 'godina' => 2008],
            ['naslov' => 'Atomic Habits', 'autor' => 'James Clear', 'godina' => 2018],
            ['naslov' => 'Laravel Up & Running', 'autor' => 'Matt Stauffer', 'godina' => 2019],
        ];

        return view('knjige.index', compact('knjige'));
    }
}