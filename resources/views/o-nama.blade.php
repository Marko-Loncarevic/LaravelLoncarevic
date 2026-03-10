@extends('layouts.app')

@section('title', 'O nama')

@section('content')
    <h1>👥 O nama</h1>
    <p class="lead">Upoznajte naš tim koji stoji iza ovog bloga.</p>
    <div class="row mt-4">
        @foreach($tim as $clan)
            <div class="col-md-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <div class="display-4 mb-2">👤</div>
                        <h5 class="card-title">{{ $clan['ime'] }}</h5>
                        <p class="text-muted">{{ $clan['uloga'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection