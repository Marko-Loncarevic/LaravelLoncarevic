<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClanakController extends Controller
{
    public function index()   { /* Prikaži sve članke   */ }
    public function create()  { /* Forma za novi članak  */ }
    public function store(Request $request) { /* Spremi novi članak */ }
    public function show(string $id)   { /* Prikaži jedan članak  */ }
    public function edit(string $id)   { /* Forma za uređivanje   */ }
    public function update(Request $request, string $id) { /* Spremi izmjene */ }
    public function destroy(string $id){ /* Obriši članak         */ }
}