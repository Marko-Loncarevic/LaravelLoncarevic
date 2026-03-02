<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $ime_skole }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">{{ $ime_skole }}</h1>
    <h3>Predmeti:</h3>
    <ul class="list-group">
        @foreach($predmeti as $predmet)
            <li class="list-group-item">{{ $predmet }}</li>
        @endforeach
    </ul>
</div>
</body>
</html>