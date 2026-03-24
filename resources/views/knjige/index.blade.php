@extends('layouts.app')

@section('title', 'Knjige')

@section('content')

<h1 class="mb-4">Popis knjiga</h1>

<div class="row">
    @foreach($knjige as $knjiga)
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $knjiga['naslov'] }}</h5>
                    <p class="card-text">
                        <strong>Autor:</strong> {{ $knjiga['autor'] }} <br>
                        <strong>Godina:</strong> {{ $knjiga['godina'] }}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection