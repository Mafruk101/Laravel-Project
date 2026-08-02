<h1 class="page-title">
    Upcoming Events
</h1>

<div class = "events-grid">
    @forelse($events as $event)
        <div class = "event-card">
            <h3>{{ $event->Title }}</h3>
            <div class="event-image-box">
                @if($event->Image)
                    <img src="{{ asset('storage/' . $event->Image) }}" alt="{{ $event->Title }}">
                @else
                    <div class="no-event-image">No Image Available</div>
                @endif
            </div>
            <p class="event-date">{{
                $event->Date instanceof \Carbon\Carbon ? $event->Date->format('d-M-Y') : $event->Date
            }}</p>
        </div>
        @empty
        <div class="no-events">No upcoming events found.</div>
    @endforelse
</div>
