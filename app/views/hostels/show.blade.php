<h1>Showing {{ $hostel->name }}</h1>
<a class="btn btn-small btn-info" href="{{ URL::to('hostels/' . $hostel->id . '/edit') }}">Edit this Hostel</a>

<div class="">
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