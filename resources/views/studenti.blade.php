@extends('layouts.app')
@section('title', 'Studenti')
@section('content')
    <h1 class="mb-4">🎓 Studenti</h1>
    <div class="row">
        @foreach($studenti as $student)
            @include('partials._student-kartica', ['student' => $student])
        @endforeach
    </div>
@endsection