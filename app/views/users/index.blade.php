<div class="col-md-10">
    <h1>All Users</h1>
</div>
<div class="col-md-2">
    <a href="{{ URL::to('users/create') }}" class="btn btn-info">Create User</a>
</div>

<div class="col-md-12">

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->username }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->role_id }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>


                    <!-- show the user (uses the show method found at GET /users/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('users/' . $value->id) }}"><span class="glyphicon glyphicon-eye-open"></span></a>

                    <!-- edit this user (uses the edit method found at GET /users/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->id . '/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>

                    <!-- delete the user (uses the destroy method DESTROY /users/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(array('url' => 'users/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>