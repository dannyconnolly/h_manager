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

            <h1>Showing {{ $event->title }}</h1>

            <div class="jumbotron text-center">
                <h2>{{ $event->title }}</h2>
                <p>
                    <strong>Type:</strong> {{ $event->type }}<br>
                    <strong>Hostel:</strong> {{ $event->hostel }}<br>
                    <strong>County:</strong> {{ $event->county }}<br>
                    <strong>Date From:</strong> {{ $event->date_from }}<br>
                    <strong>Date To:</strong> {{ $event->date_to }}<br>
                    <strong>Details:</strong> {{ $event->details }}
                </p>
            </div>

        </div>
    </body>
</html>