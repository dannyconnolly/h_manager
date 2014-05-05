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
                    @if(Auth::check())
                    <li><a href="{{ URL::to('users') }}">View All Users</a></li>
                    <li><a href="{{ URL::to('users/create') }}">Create a User</a></li>
                    <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                    @else 
                    <li><a href="{{ URL::to('login') }}">Login</a></li>
                    @endif
                </ul>
            </nav>

            <h1>Edit {{ $user->username }}</h1>

            <!-- if there are creation errors, they will show here -->
            {{ HTML::ul($errors->all()) }}

            {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}

            <div class="form-group">
                {{ Form::label('username', 'Username') }}
                {{ Form::text('username', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::email('email', null, array('class' => 'form-control')) }}
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
                {{ Form::select('role_id', array('0' => 'Select a Level', '1' => 'Dev Admin', '2' => 'Admin', '3' => 'Editor'), null, array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Edit the User!', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}

        </div>
    </body>
</html>