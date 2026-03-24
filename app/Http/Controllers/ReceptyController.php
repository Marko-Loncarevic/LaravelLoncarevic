<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceptyController extends Controller
{
    public function index(Request $request)
    {
        $recepti = [
            ['id'=>1, 'naziv'=>'Tiramisu', 'kategorija'=>'desert'],
            ['id'=>2, 'naziv'=>'Pizza', 'kategorija'=>'glavno jelo'],
            ['id'=>3, 'naziv'=>'Palačinke', 'kategorija'=>'desert'],
            ['id'=>4, 'naziv'=>'Juha', 'kategorija'=>'predjelo'],
            ['id'=>5, 'naziv'=>'Burger', 'kategorija'=>'glavno jelo'],
        ];

        // dohvat query parametra ?kategorija=
        $kategorija = $request->query('kategorija');

        // filtriranje
        if ($kategorija) {
            $recepti = array_filter($recepti, function ($r) use ($kategorija) {
                return $r['kategorija'] === $kategorija;
            });
        }

        return view('recepti.index', [
            'recepti' => $recepti,
            'kategorija' => $kategorija
        ]);
    }

    public function show(string $id)
    {
        return "Detalji recepta ID: " . $id;
    }

    public function create() {}
    public function store(Request $request) {}
    public function edit(string $id) {}
    public function update(Request $request, string $id) {}
    public function destroy(string $id) {}
}