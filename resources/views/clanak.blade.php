<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>{{ $naslov }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">

    {{-- Prikazuje status članka --}}
    @if($objavljen)
        <span class="badge bg-success">✓ Objavljeno</span>
    @else
        <span class="badge bg-secondary">📝 Skica</span>
    @endif

    <h1 class="mt-2">{{ $naslov }}</h1>
    <p class="text-muted">Autor: {{ $autor }}</p>
    <p>{{ $sadrzaj }}</p>

    {{-- Prikazuje komentare samo ako ih ima --}}
    @if($komentara > 0)
        <div class="alert alert-info">
            Ovaj članak ima {{ $komentara }} komentara.
        </div>
    @else
        <div class="alert alert-light">
            Još nema komentara. Budite prvi!
        </div>
    @endif

</div>
</body>
</html>