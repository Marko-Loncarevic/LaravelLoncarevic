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
//zadatak 2
Route::get('/clanak', function () {
    return view('clanak', [
        'naslov'     => 'Uvod u Laravel',
        'sadrzaj'    => 'Laravel je najpopularniji PHP framework...',
        'objavljen'  => true,
        'komentara'  => 0,
        'autor'      => 'Ana Horvat',
    ]);
});

Route::get('/blog', function () {
    $clanci = [
        ['id' => 1, 'naslov' => 'Uvod u Laravel',   'kategorija' => 'PHP',    'ocjena' => 5],
        ['id' => 2, 'naslov' => 'Baze podataka',     'kategorija' => 'SQL',    'ocjena' => 4],
        ['id' => 3, 'naslov' => 'Blade templating',  'kategorija' => 'PHP',    'ocjena' => 5],
        ['id' => 4, 'naslov' => 'CSS Grid',          'kategorija' => 'CSS',    'ocjena' => 3],
        ['id' => 5, 'naslov' => 'JavaScript osnove', 'kategorija' => 'JS',     'ocjena' => 4],
    ];

    return view('blog', compact('clanci'));
    // compact('clanci') == ['clanci' => $clanci]
});


Route::get('/o-nama', function () {
    return view('o-nama', [
        'tim' => [
            ['ime' => 'Ana Horvat',  'uloga' => 'Voditeljica projekta'],
            ['ime' => 'Marko Babić', 'uloga' => 'Backend developer'],
            ['ime' => 'Petra Kovač', 'uloga' => 'Frontend developer'],
        ]
    ]);
});


Route::get('/automobili', function () {
    $automobili = [
        ['id'=>1,'marka'=>'VW','model'=>'Golf','godina'=>2022],
        ['id'=>2,'marka'=>'Toyota','model'=>'Corolla','godina'=>2021],
        ['id'=>3,'marka'=>'BMW','model'=>'3 Series','godina'=>2023],
    ];
    return view('automobili', compact('automobili'));
});

Route::get('/studenti', function () {
    $studenti = [
        ['ime'=>'Ana Horvat', 'smjer'=>'Informatika', 'polozio'=>true],
        ['ime'=>'Marko Babić','smjer'=>'Elektrotehnika','polozio'=>false],
        ['ime'=>'Petra Kovač','smjer'=>'Strojarstvo', 'polozio'=>true],
        ['ime'=>'Ivan Perić', 'smjer'=>'Informatika', 'polozio'=>true],
    ];
    return view('studenti', compact('studenti'));
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

//samostalni zadataci 2
Route::get('/knjige', function () {

    $knjige = [
        ['naslov'=>'1984','autor'=>'George Orwell','godina'=>1949,'procitana'=>true],
        ['naslov'=>'The Hobbit','autor'=>'J.R.R. Tolkien','godina'=>1937,'procitana'=>true],
        ['naslov'=>'Clean Code','autor'=>'Robert C. Martin','godina'=>2008,'procitana'=>false],
        ['naslov'=>'Atomic Habits','autor'=>'James Clear','godina'=>2018,'procitana'=>true],
        ['naslov'=>'Laravel Up & Running','autor'=>'Matt Stauffer','godina'=>2019,'procitana'=>false],
    ];

    $procitano = count(array_filter($knjige, fn($k) => $k['procitana']));
    $ukupno = count($knjige);

    return view('knjige', compact('knjige','procitano','ukupno'));
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

    return view('home', [
        'pages' => $pages,
        'aktivnaStrana' => 'pocetna'
    ]);
});

Route::get('/blog', function () {
    $clanci = [
        ['id' => 1, 'naslov' => 'Uvod u Laravel', 'kategorija' => 'PHP', 'ocjena' => 5],
        ['id' => 2, 'naslov' => 'Baze podataka', 'kategorija' => 'SQL', 'ocjena' => 4],
    ];

    return view('blog', [
        'clanci' => $clanci,
        'aktivnaStrana' => 'blog'
    ]);
});

Route::get('/o-nama', function () {
    return view('o-nama', [
        'tim' => [
            ['ime' => 'Ana Horvat',  'uloga' => 'Voditeljica projekta'],
            ['ime' => 'Marko Babić', 'uloga' => 'Backend developer'],
        ],
        'aktivnaStrana' => 'onama'
    ]);
});

Route::get('/automobili', function () {
    $automobili = [
        ['id'=>1,'marka'=>'VW','model'=>'Golf','godina'=>2022],
    ];

    return view('automobili', [
        'automobili' => $automobili,
        'aktivnaStrana' => 'automobili'
    ]);
});

Route::get('/studenti', function () {
    $studenti = [
        ['ime'=>'Ana Horvat', 'smjer'=>'Informatika', 'polozio'=>true],
    ];

    return view('studenti', [
        'studenti' => $studenti,
        'aktivnaStrana' => 'studenti'
    ]);
});

Route::get('/kontakt', function () {
    return view('kontakt', [
        'aktivnaStrana' => 'kontakt'
    ]);
});

Route::get('/knjige', function () {
    $knjige = [
        ['naslov'=>'1984','autor'=>'George Orwell','godina'=>1949,'procitana'=>true],
    ];

    return view('knjige', [
        'knjige' => $knjige,
        'aktivnaStrana' => 'knjige'
    ]);
});


Route::get('/raspored', function () {

    $raspored = [
        'Ponedjeljak' => ['Matematika', 'Hrvatski', 'Engleski'],
        'Utorak'      => ['Fizika', 'Kemija', 'Biologija'],
        'Srijeda'     => ['Informatika', 'Povijest', 'Geografija'],
        'Četvrtak'    => ['Likovni', 'Glazbeni', 'Tjelesni'],
        'Petak'       => ['Matematika', 'Informatika', 'Sat razrednika'],
    ];

    return view('raspored', [
        'raspored' => $raspored,
        'aktivnaStrana' => 'raspored'
    ]);
});