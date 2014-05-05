<h1>Showing {{ $event->title }}</h1>

<div class="jumbotron text-center">
    <h2>{{ $event->title }}</h2>
    <p>
        <strong>Type:</strong> {{ $event->type }}<br>
        <strong>Hostel:</strong> {{ $event->hostel }}<br>
        <strong>County:</strong> {{ $event->county }}<br>
        <strong>Date From:</strong> {{ $event->date_from }}<br>
        <strong>Date To:</strong> {{ $event->date_to }}<br>
        <strong>Details:</strong> {{ $event->details }}
    </p>
</div>
