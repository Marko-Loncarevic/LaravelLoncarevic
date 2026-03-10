<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- @yield('title') daje child viewu mogućnost da postavi vlastiti naslov --}}
    <title>@yield('title', 'Moj Blog')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Child view može ubaciti vlastiti CSS ovdje --}}
    @yield('styles')
</head>
<body>

    {{-- ===== NAVBAR — pisan samo jednom! ===== --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">🔴 Laravel Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Početna</a></li>
                    <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="/o-nama">O nama</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- ===== GLAVNI SADRŽAJ ===== --}}
    <main class="container py-4">
        @yield('content')
    </main>

    {{-- ===== FOOTER ===== --}}
    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p class="mb-0">&copy; {{ date('Y') }} Laravel Blog. Sva prava pridržana.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Child view može ubaciti vlastiti JavaScript ovdje --}}
    @yield('scripts')
</body>
</html>