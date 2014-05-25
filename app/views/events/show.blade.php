<div class="page-header">
    <h1 class="">{{ $event->title }}</h1>
    <a class="btn btn-small btn-info" href="{{ URL::to('events/' . $event->id . '/edit') }}">Edit this Event</a>
</div>

<div class="col-md-7">
    @include('partials.notifications')
    <p>
        <strong>Title:</strong> {{ $event->title }}<br>
        <strong>Type:</strong> {{ $event->eventtype->name }}<br>
        <strong>Hostel:</strong> {{ SiteHelper::getHostelName($event->hostel_id) }}<br>
        <strong>County:</strong> {{SiteHelper::getCountyName($event->county_id) }}<br>
        <strong>Date From:</strong> {{ $event->date_from }}<br>
        <strong>Date To:</strong> {{ $event->date_to }}<br>
        <strong>Details:</strong> {{ $event->details }}
    </p>
</div>