<div class="col-md-10">
    <h1>{{ $event->title }}</h1>
</div>
<div class="col-md-2">
    <a class="btn btn-small btn-info" href="{{ URL::to('events/' . $event->id . '/edit') }}">Edit this Event</a>
</div>
<div class="col-md-12">
    @include('partials.notifications')
    <p>
        <strong>Title:</strong> {{ $event->title }}<br>
        <strong>Type:</strong> {{ $event->event_type_id }}<br>
        <strong>Hostel:</strong> {{ $event->hostel }}<br>
        <strong>County:</strong> {{ $event->county }}<br>
        <strong>Date From:</strong> {{ $event->date_from }}<br>
        <strong>Date To:</strong> {{ $event->date_to }}<br>
        <strong>Details:</strong> {{ $event->details }}
    </p>
</div>