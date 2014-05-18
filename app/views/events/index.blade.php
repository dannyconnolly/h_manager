<div class="col-md-10">
    <h1>Events</h1>
</div>
<div class="col-md-2">
    <a href="{{ URL::to('events/create') }}" class="btn btn-info">Create an Event</a>
</div>
<div class="col-md-12">
    @include('partials.notifications')

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>ID<i class="fa fa-sort"></i></th>
                <th>Title<i class="fa fa-sort"></i></th>
                <th>Event Type<i class="fa fa-sort"></i></th>
                <th>Hostel<i class="fa fa-sort"></i></th>
                <th>County<i class="fa fa-sort"></i></th>
                <th>Date From<i class="fa fa-sort"></i></th>
                <th>Date To<i class="fa fa-sort"></i></th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->event_type_id }}</td>
                <td>{{ $value->hostel }}</td>
                <td>{{ $value->county }}</td>
                <td>{{ $value->date_from }}</td>
                <td>{{ $value->date_to }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    <!-- show the event (uses the show method found at GET /events/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('events/' . $value->id) }}"><i class="fa fa-eye"></i>View</a>
                    <!-- edit this event (uses the edit method found at GET /events/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('events/' . $value->id . '/edit') }}"><i class="fa fa-pencil"></i>Edit</a>

                    <!-- delete the event (uses the destroy method DESTROY /events/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(array('url' => 'events/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $events->links() }}
</div>
