<!DOCTYPE html>
<html>
    <head>
        <title>H Manager</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('hostels') }}">Hostels Alert</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('hostels') }}">View All Hostels</a></li>
                    <li><a href="{{ URL::to('hostels/create') }}">Create a Hostel</a>
                </ul>
            </nav>

            <h1>All the Hostels</h1>

            <!-- will be used to show any messages -->
            @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Hostel Name</td>
                        <td>Open From</td>
                        <td>Open To</td>
                        <td>Actions</td>
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

        </div>
    </body>
</html>