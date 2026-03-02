<!DOCTYPE html>
<html>
<head>
    <title>Povrće</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Početna</a>
    </div>
</nav>

<div class="container mt-4">
    <h1>Lista povrća</h1>

    <ul class="list-group mt-3">
        @foreach($povrce as $item)
            <li class="list-group-item">
                {{ $item }}
            </li>
        @endforeach
    </ul>
</div>

</body>
</html>