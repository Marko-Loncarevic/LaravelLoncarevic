<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VijestiController extends Controller
{
    // Privatna "baza" podataka za primjer
    private array $vijesti = [
        1 => ['id' => 1, 'naslov' => 'Laravel je odličan okvir',       'sadrzaj' => 'Laravel je PHP okvir koji...',    'datum' => '2024-01-15'],
        2 => ['id' => 2, 'naslov' => 'PHP 8.2 donosi nove mogućnosti',  'sadrzaj' => 'Nova verzija PHP-a donosi...',    'datum' => '2024-01-20'],
        3 => ['id' => 3, 'naslov' => 'MVC arhitektura olakšava razvoj', 'sadrzaj' => 'MVC obrazac dijeli aplikaciju...','datum' => '2024-02-01'],
    ];

    // Prikaži sve vijesti
    public function index()
    {
        $vijesti = $this->vijesti;
        return view('vijesti.index', compact('vijesti'));
    }

    // Prikaži jednu vijest
    public function show(int $id)
    {
        $vijest = $this->vijesti[$id] ?? null;

        if (!$vijest) {
            abort(404, 'Vijest nije pronađena');
        }

        return view('vijesti.show', compact('vijest'));
    }
}