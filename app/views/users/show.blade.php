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

            <h1>Showing {{ $user->username }}</h1>

            <div class="jumbotron text-center">
                <h2>{{ $user->username }}</h2>
                <p>
                    <strong>Email:</strong> {{ $user->email }}<br>
                    <strong>Level:</strong> {{ $user->role_id }}
                </p>
            </div>

        </div>
    </body>
</html>