<h1>Showing {{ $eventtype->name }}</h1>
<a class="btn btn-small btn-info" href="{{ URL::to('eventtypes/' . $eventtype->id . '/edit') }}">Edit this EventType</a
>
<div class="">
    <h2>{{ $eventtype->name }}</h2>
</div>
