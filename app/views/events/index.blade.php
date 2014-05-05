<h1>All the Events</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Type</th
            <th>Hostel</th>
            <th>County</th>
            <th>Date From</th>
            <th>Date To</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($events as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->type }}</td>
            <td>{{ $value->hostel }}</td>
            <td>{{ $value->county }}</td>
            <td>{{ $value->date_from }}</td>
            <td>{{ $value->date_to }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the event (uses the destroy method DESTROY /events/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'events/' . $value->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete this Event', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                <!-- show the event (uses the show method found at GET /events/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('events/' . $value->id) }}">Show this Event</a>

                <!-- edit this event (uses the edit method found at GET /events/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('events/' . $value->id . '/edit') }}">Edit this Event</a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
