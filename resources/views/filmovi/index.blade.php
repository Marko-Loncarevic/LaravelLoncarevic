@extends('layouts.app')

@section('title', 'Filmovi')

@section('content')

<h1 class="mb-4">Popis filmova</h1>

<div class="row">
    @foreach($filmovi as $film)
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $film['naslov'] }}</h5>
                    <p class="card-text">
                        {{ $film['reziser'] }} ({{ $film['godina'] }})
                    </p>

                    <a href="{{ route('filmovi.show', $film['id']) }}" class="btn btn-primary">
                        Detalji
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection