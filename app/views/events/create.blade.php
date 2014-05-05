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
                    <a class="navbar-brand" href="{{ URL::to('events') }}">Event Alert</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('users') }}">View All Users</a></li>
                    <li><a href="{{ URL::to('users/create') }}">Create a User</a></li>
                    <li><a href="{{ URL::to('events') }}">View All Events</a></li>
                    <li><a href="{{ URL::to('events/create') }}">Create a Event</a></li>
                </ul>
            </nav>

            <h1>Create a Event</h1>

            <!-- if there are creation errors, they will show here -->
            {{ HTML::ul($errors->all()) }}

            {{ Form::open(array('url' => 'events')) }}

            <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('type', 'Type') }}
                {{ Form::select('type', array('0' => 'Select a type', '1' => 'Festival', '2' => 'Walk', '3' => 'Other'), Input::old('role_id'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('hostel', 'Hostel') }}
                {{ Form::select('hostel', array('0' => 'Select a hostel', '1' => 'Hostel 1', '2' => 'Hostel 2', '3' => 'Hostel 3'), Input::old('hostel'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('county', 'County') }}
                {{ Form::select('county', array('0' => 'Select a county', '1' => 'Dublin', '2' => 'Tyrone', '3' => 'Wicklow'), Input::old('county'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('date_from', 'Date From') }}
                {{ Form::text('date_from', Input::old('date_from'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('date_to', 'Date To') }}
                {{ Form::text('date_to', Input::old('date_to'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('details', 'Details') }}
                {{ Form::textarea('details', Input::old('details'), array('class' => 'form-control')) }}
            </div>


            {{ Form::submit('Create the Event!', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}

        </div>
    </body>
</html>