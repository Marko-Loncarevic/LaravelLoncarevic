<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    $naslov = 'Moj sjajni blog';
    $clanci = ['Uvod u Laravel', 'PHP osnove', 'MySQL za početnike'];

    return view('blog', [
        'naslov' => $naslov,
        'clanci' => $clanci,
    ]);
});
Route::get('/pozdrav/{ime}', function ($ime) {
    return 'Pozdrav, ' . $ime . '! Dobrodošli u Laravel.';
});
Route::get('/api/automobil', function () {
    return response()->json([
        [
            'id'      => 1,
            'marka'   => 'Mercedes',
            'model'   => 'C class',
            'godina'  => 2022,
        ],
        [
            'id'      => 2,
            'marka'   => 'Fiat',
            'model'   => 'Multipla',
            'godina'  => 2003,
        ],
        [
            'id'      => 3,
            'marka'   => 'Volkswagen',
            'model'   => 'Passat B6',
            'godina'  => 2003,
        ],
    ]);
});
Route::get('/skola', function () {
    return view('skola', [
        'ime_skole' => 'Tehnička škola Daruvar',
        'predmeti'  => [
            'Vjeronauk',
            'Tjelesna i zdravstvena kultura',
            'Matematika',
            'SJIWP',
        ],
    ]);
});

Route::get('/automobili', function () {
    return view('automobili');
});


Route::get('/povrce', function () {
    $povrce = ['Mrkva', 'Krumpir', 'Luk', 'Celer', 'Cikla'];
    return view('povrce', compact('povrce'));
});


Route::get('/omeni', function () {
    return view('omeni');
});





Route::get('/api/automobili/{id}', function ($id) {

   
    $automobili = [
        ['id' => 1, 'naziv' => 'Fiat Punto', 'Godiste' => '2001'],
        ['id' => 2, 'naziv' => 'Audi A6', 'Godiste' => '2020'],
        ['id' => 3, 'naziv' => 'Mercedes SLK', 'Godiste' => '2012'],
    ];


    foreach ($automobili as $auto) {
        if ($auto['id'] == $id) {
            return response()->json($auto);
        }
    }

    
    return response()->json(
        ['greska' => 'Automobil nije pronaden'],
        404
    );
});



Route::get('/', function () {

    $pages = [
        [
            'name' => 'Automobili',
            'description' => 'Vroom vroom.',
            'route' => '/automobili'
        ],
        [
            'name' => 'Povrce',
            'description' => 'Povrce',
            'route' => '/povrce'
        ],
        [
            'name' => 'O meni',
            'description' => 'Bok, ja sam Marko.',
            'route' => '/omeni'
        ],
    ];

    return view('home', compact('pages'));
});