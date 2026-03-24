@extends('layouts.app')

@section('title', $film['naslov'])

@section('content')

<h1>{{ $film['naslov'] }}</h1>

<ul class="list-group mt-3">
    <li class="list-group-item"><strong>Redatelj:</strong> {{ $film['reziser'] }}</li>
    <li class="list-group-item"><strong>Godina:</strong> {{ $film['godina'] }}</li>
    <li class="list-group-item"><strong>Žanr:</strong> {{ $film['zanr'] }}</li>
</ul>

<a href="{{ route('filmovi.index') }}" class="btn btn-secondary mt-3">
    ← Povratak
</a>

@endsection