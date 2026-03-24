<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private array $clanci = [
        1 => [
            'id'      => 1,
            'naslov'  => 'Moj prvi blog post',
            'sadrzaj' => 'Ovo je sadržaj prvog posta...',
            'autor'   => 'Ana Horvat',
            'datum'   => '2024-01-10',
        ],
        2 => [
            'id'      => 2,
            'naslov'  => 'Laravel je jednostavan',
            'sadrzaj' => 'Nakon nekoliko sati učenja...',
            'autor'   => 'Ivan Kovač',
            'datum'   => '2024-01-15',
        ],
        3 => [
            'id'      => 3,
            'naslov'  => 'Zašto volim PHP',
            'sadrzaj' => 'PHP je jedan od najpopularnijih...',
            'autor'   => 'Maja Perić',
            'datum'   => '2024-01-22',
        ],
        4 => [
            'id'      => 4,
            'naslov'  => 'MVC mi je jasno!',
            'sadrzaj' => 'Nakon bloka 3, sve mi je jasno...',
            'autor'   => 'Luka Novak',
            'datum'   => '2024-02-01',
        ],
    ];

    public function index()
    {
        $clanci = $this->clanci;
        return view('blog.index', compact('clanci'));
    }

    public function show(int $id)
    {
        $clanak = $this->clanci[$id] ?? null;

        if (!$clanak) {
            abort(404, 'Članak nije pronađen');
        }

        return view('blog.show', compact('clanak'));
    }
}