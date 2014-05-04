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
                    <a class="navbar-brand" href="{{ URL::to('hostels') }}">Hostel Alert</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('hostels') }}">View All Hostels</a></li>
                    <li><a href="{{ URL::to('hostels/create') }}">Create a Hostel</a>
                </ul>
            </nav>

            <h1>Showing {{ $hostel->name }}</h1>

            <div class="jumbotron text-center">
                <h2>{{ $hostel->name }}</h2>
                <p>
                    <strong>Address Line 1:</strong> {{ $hostel->address_line_1 }}<br>
                    <strong>Address Line 2:</strong> {{ $hostel->address_line_2 }}<br>
                    <strong>Town/City:</strong> {{ $hostel->address_town_city }}<br>
                    <strong>County:</strong> {{ $hostel->address_state_county }}<br>
                    <strong>Latitude:</strong> {{ $hostel->latitude }}<br>
                    <strong>Longitude:</strong> {{ $hostel->longitude }}<br>
                    <strong>Email:</strong> {{ $hostel->email }}<br>
                    <strong>Phone:</strong> {{ $hostel->phone }}<br>
                    <strong>Website:</strong> {{ $hostel->website }}<br>
                    <strong>Description:</strong> {{ $hostel->description }}<br>
                    <strong>Photo:</strong> {{ $hostel->photo }}<br>
                    <strong>Open From:</strong> {{ $hostel->open_from }}<br>
                    <strong>Open To:</strong> {{ $hostel->open_to }}
                </p>
            </div>
        </div>
    </body>
</html>