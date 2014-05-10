<div class="col-md-10">
    <h1>Event Types</h1>
</div>
<div class="col-md-2">
    <a href="{{ URL::to('eventtypes/create') }}" class="btn btn-info">Create Event Type</a>
</div>

<div class="col-md-12">
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eventtypes as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- show the eventtype (uses the show method found at GET /eventtypes/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('eventtypes/' . $value->id) }}"><span class="glyphicon glyphicon-eye-open"></span></a>

                    <!-- edit this eventtype (uses the edit method found at GET /eventtypes/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('eventtypes/' . $value->id . '/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>

                    <!-- delete the eventtype (uses the destroy method DESTROY /eventtypes/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(array('url' => 'eventtypes/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>