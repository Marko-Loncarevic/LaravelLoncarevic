@extends('layouts.app')
@section('title', 'Proizvodi')
@section('content')
<div class="container mt-4">
    <h1>Popis proizvoda</h1>
    <table class="table table-striped mt-3">
        <thead class="table-dark">
            <tr><th>#</th><th>Naziv</th><th>Cijena (EUR)</th></tr>
        </thead>
        <tbody>
            @foreach($proizvodi as $p)
                <tr>
                    <td>{{ $p['id'] }}</td>
                    <td>{{ $p['naziv'] }}</td>
                    <td>{{ number_format($p['cijena'], 2, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection