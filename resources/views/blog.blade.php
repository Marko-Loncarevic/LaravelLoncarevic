@extends('layouts.app')

@section('title', 'Blog članci')

@section('content')
    <h1 class="mb-4">Blog članci</h1>

    @forelse($clanci as $clanak)
        {{-- Umjesto card HTML-a ovdje, uključujemo partial i proslijeđujemo varijablu --}}
        @include('partials._clanak-kartica', ['clanak' => $clanak])
    @empty
        <div class="alert alert-warning">Nema objavljenih članaka.</div>
    @endforelse
@endsection