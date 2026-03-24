@extends('layouts.app')
@section('title', 'Blog')
@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Blog</h1>
    @foreach($clanci as $clanak)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $clanak['naslov'] }}</h5>
                <p class="text-muted">{{ $clanak['autor'] }} · {{ $clanak['datum'] }}</p>
                <a href="{{ route('blog.show', $clanak['id']) }}" class="btn btn-primary btn-sm">
                    Čitaj više
                </a>
            </div>
        </div>
    @endforeach
</div>
@endsection