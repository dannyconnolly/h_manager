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
                    <a class="navbar-brand" href="{{ URL::to('users') }}">User Alert</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('users') }}">View All Users</a></li>
                    <li><a href="{{ URL::to('users/create') }}">Create a User</a></li>
                </ul>
            </nav>

            <h1>Create a User</h1>

            <!-- if there are creation errors, they will show here -->
            {{ HTML::ul($errors->all()) }}

            {{ Form::open(array('url' => 'users')) }}

            <div class="form-group">
                {{ Form::label('username', 'Username') }}
                {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password', array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('password', 'Confirm Password') }}
                {{ Form::password('password', array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('role_id', 'User Level') }}
                {{ Form::select('role_id', array('0' => 'Select a Level', '1' => 'Dev Admin', '2' => 'Admin', '3' => 'Editor'), Input::old('role_id'), array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Create the User!', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}

        </div>
    </body>
</html>