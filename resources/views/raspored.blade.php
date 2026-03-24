@extends('layouts.app')

@section('title', 'Raspored')

@section('content')
<h1 class="mb-4">Tjedni raspored</h1>

@foreach($raspored as $dan => $sati)

    <div class="p-3 mb-3 
        {{ $loop->odd ? 'bg-light border rounded' : '' }}">

        <h4>
            {{ $loop->iteration }}. {{ $dan }}
        </h4>

        <ul class="list-group">

            @foreach($sati as $sat)

                {{-- $loop->parent koristimo za pristup vanjskoj petlji --}}
                @include('partials.sat', [
                    'sat' => $sat,
                    'danIndex' => $loop->parent->iteration,
                    'satIndex' => $loop->iteration
                ])

            @endforeach

        </ul>
    </div>

@endforeach

@endsection