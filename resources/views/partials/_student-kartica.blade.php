<div class="col-md-3 mb-3">
    <div class="card border-{{ $student['polozio'] ? 'success' : 'danger' }}">
        <div class="card-header bg-{{ $student['polozio'] ? 'success' : 'danger' }} text-white">
            @if($student['polozio']) ✅ Položio @else ❌ Nije položio @endif
        </div>
        <div class="card-body">
            <h6>{{ $student['ime'] }}</h6>
            <small class="text-muted">{{ $student['smjer'] }}</small>
        </div>
    </div>
</div>