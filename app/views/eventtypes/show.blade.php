<div class="col-md-10">
    <h1>Showing {{ $eventtype->name }}</h1>
</div>
<div class="col-md-2">
    <a class="btn btn-small btn-info" href="{{ URL::to('eventtypes/' . $eventtype->id . '/edit') }}">Edit Event Type</a>
</div>

<div class="col-md-12">
    @include('partials.notifications')
    <p>
        <strong>Name:</strong> {{ $eventtype->name }}
    </p>
</div>
