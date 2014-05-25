<div class="page-header">
    <h1 class="">{{ $event->title }}</h1>
    <a class="btn btn-small btn-info" href="{{ URL::to('events/' . $event->id . '/edit') }}">Edit this Event</a>
</div>

<div class="col-md-7 view">
    @include('partials.notifications')
    <p><strong>Title:</strong> {{ $event->title }}</p>
    <p><strong>Type:</strong> {{ $event->eventtype->name }}</p>
    <p><strong>Hostel:</strong> {{ SiteHelper::getHostelName($event->hostel_id) }}</p>
    <p><strong>County:</strong> {{SiteHelper::getCountyName($event->county_id) }}</p>
    <p><strong>Date From:</strong> {{ $event->date_from }}</p>
    <p><strong>Date To:</strong> {{ $event->date_to }}</p>
    <p><strong>Details:</strong><br /> {{ $event->details }}</p>
</div>