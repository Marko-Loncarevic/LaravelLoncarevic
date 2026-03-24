@extends('layouts.app')

@section('title', 'Recepti')

@section('content')

<h1 class="mb-4">Recepti</h1>

{{-- FILTER LINKOVI --}}
<div class="mb-4">
    <a href="{{ route('recepti.index') }}" class="btn btn-secondary">Svi</a>

    <a href="{{ route('recepti.index', ['kategorija' => 'desert']) }}" class="btn btn-warning">
        Desert
    </a>

    <a href="{{ route('recepti.index', ['kategorija' => 'glavno jelo']) }}" class="btn btn-primary">
        Glavno jelo
    </a>

    <a href="{{ route('recepti.index', ['kategorija' => 'predjelo']) }}" class="btn btn-success">
        Predjelo
    </a>
</div>

{{-- INFO --}}
<p>
    Odabrana kategorija:
    <strong>{{ $kategorija ?? 'Sve' }}</strong>
</p>

{{-- PRIKAZ RECEPTA --}}
<div class="row">
    @forelse($recepti as $recept)
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>{{ $recept['naziv'] }}</h5>
                    <p>Kategorija: {{ $recept['kategorija'] }}</p>
                </div>
            </div>
        </div>
    @empty
        <p class="text-muted">Nema recepata za odabranu kategoriju.</p>
    @endforelse
</div>

@endsection