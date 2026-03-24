<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProizvodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proizvodi = [
            ['id' => 1, 'naziv' => 'Laptop HP',    'cijena' => 899.99],
            ['id' => 2, 'naziv' => 'Miš bežični',  'cijena' =>  45.50],
            ['id' => 3, 'naziv' => 'Tipkovnica',   'cijena' =>  79.00],
        ];
    
        return view('proizvodi.index', compact('proizvodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
