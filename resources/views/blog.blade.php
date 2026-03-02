<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Moj Blog</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-danger">
    <div class="container">
        <span class="navbar-brand">Moj Laravel Blog</span>
    </div>
</nav>

<div class="container mt-4">
    <h1>Dobrodošli na blog!</h1>
    <p class="lead">Ovo je moja prva Laravel stranica.</p>
</div>
<div class="container mt-4">
    <h1>{{ $naslov }}</h1>

    <ul>
        @foreach($clanci as $clanak)
            <li>{{ $clanak }}</li>
        @endforeach
    </ul>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>