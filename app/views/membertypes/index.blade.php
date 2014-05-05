<h1>All the Member Types</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Cost</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($membertypes as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->description }}</td>
            <td>{{ $value->cost }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the membertype (uses the destroy method DESTROY /membertypes/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'membertypes/' . $value->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete this MemberType', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                <!-- show the membertype (uses the show method found at GET /membertypes/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('membertypes/' . $value->id) }}">Show this MemberType</a>

                <!-- edit this membertype (uses the edit method found at GET /membertypes/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('membertypes/' . $value->id . '/edit') }}">Edit this MemberType</a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>