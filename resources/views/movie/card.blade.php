<div class="card">
    <img src="{{ $movie->poster }}" class="card-img-top" alt="{{ $movie->original_title }}">
    <div class="card-body">
        <div>
            <h4 class="card-title">{{ $movie->title }}</h4>
            <h6 class="card-subtitle text-muted">{{ $movie->original_title }}</h6>
        </div>
        <div class="d-flex justify-content-between">
            <p class="fw-semibold">Vote: {{ $movie->vote }}</p>
            <p class="fw-semibold">Exit date: {{ $movie->getDate() }}</p>
        </div>
    </div>
</div>
