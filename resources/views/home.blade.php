<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Početna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Moja Stranica</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
    </div>
</nav>


<div class="container mt-5">
    <div class="row">

        @foreach($pages as $page)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $page['name'] }}</h5>
                        <p class="card-text">{{ $page['description'] }}</p>

                        <a href="{{ $page['route'] }}" class="btn btn-primary mt-auto">
                            Otvori stranicu
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>