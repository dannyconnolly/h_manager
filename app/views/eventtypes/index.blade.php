<div class="col-md-10">
    <h1>Event Types</h1>
</div>
<div class="col-md-2">
    <a href="{{ URL::to('eventtypes/create') }}" class="btn btn-info">Create Event Type</a>
</div>

<div class="col-md-12">
    @include('partials.notifications')

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID<i class="fa fa-sort"></i></th>
                <th>Name<i class="fa fa-sort"></i></th>
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
                    <a class="btn btn-small btn-success" href="{{ URL::to('eventtypes/' . $value->id) }}"><i class="fa fa-eye"></i>View</a>

                    <!-- edit this eventtype (uses the edit method found at GET /eventtypes/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('eventtypes/' . $value->id . '/edit') }}"><i class="fa fa-pencil"></i>Edit</a>

                    <!-- delete the eventtype (uses the destroy method DESTROY /eventtypes/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(array('url' => 'eventtypes/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $eventtypes->links() }}
</div>