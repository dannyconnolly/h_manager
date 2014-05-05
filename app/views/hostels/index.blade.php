<h1>All the Hostels</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Hostel Name</th>
            <th>Open From</th>
            <th>Open To</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($hostels as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->open_from }}</td>
            <td>{{ $value->open_to }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the hostel (uses the destroy method DESTROY /hostels/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'hostels/' . $value->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete this Hostel', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                <!-- show the hostel (uses the show method found at GET /hostels/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('hostels/' . $value->id) }}">Show this Hostel</a>

                <!-- edit this hostel (uses the edit method found at GET /hostels/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('hostels/' . $value->id . '/edit') }}">Edit this Hostel</a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
