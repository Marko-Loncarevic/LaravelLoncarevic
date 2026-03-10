@extends('layouts.app')

@section('title','Knjige')

@section('content')

<h1 class="mb-4">📚 Popis knjiga</h1>

<table class="table">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Naslov</th>
            <th>Autor</th>
            <th>Godina</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>

    @forelse($knjige as $knjiga)
        <tr class="{{ $knjiga['procitana'] ? 'table-success' : 'table-secondary' }}">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $knjiga['naslov'] }}</td>
            <td>{{ $knjiga['autor'] }}</td>
            <td>{{ $knjiga['godina'] }}</td>
            <td>
                @if($knjiga['procitana'])
                    Pročitana
                @else
                    Nije pročitana
                @endif
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5" class="text-center">
                Nema knjiga u listi
            </td>
        </tr>
    @endforelse

    </tbody>
</table>

<p class="mt-3">
    <strong>Pročitano {{ $procitano }} od {{ $ukupno }} knjiga</strong>
</p>

@endsection