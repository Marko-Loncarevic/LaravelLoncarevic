<div class="card mb-3 shadow-sm">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-start">
            <h5 class="card-title mb-1">{{ $clanak['naslov'] }}</h5>
            <span class="badge bg-secondary">{{ $clanak['kategorija'] }}</span>
        </div>
        <div class="mt-2">
            @for($i = 1; $i <= 5; $i++)
                {{ $i <= $clanak['ocjena'] ? '⭐' : '☆' }}
            @endfor
        </div>
        <a href="/clanak/{{ $clanak['id'] }}" class="btn btn-sm btn-outline-danger mt-2">
            Čitaj više →
        </a>
    </div>
</div>