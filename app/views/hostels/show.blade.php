<div class="col-md-10">
    <h1>Showing {{ $hostel->name }}</h1>
</div>
<div class="col-md-2">
    <a class="btn btn-small btn-info" href="{{ URL::to('hostels/' . $hostel->id . '/edit') }}">Edit Hostel</a>
</div>

<div class="col-md-12">
    @include('partials.notifications')
    <p>
        <strong>Name:</strong> {{ $hostel->name }}<br>
        <strong>Address Line 1:</strong> {{ $hostel->address_line_1 }}<br>
        <strong>Address Line 2:</strong> {{ $hostel->address_line_2 }}<br>
        <strong>Town/City:</strong> {{ $hostel->town_city }}<br>
        <strong>County:</strong> {{ $hostel->state_county }}<br>
        <strong>Latitude:</strong> {{ $hostel->latitude }}<br>
        <strong>Longitude:</strong> {{ $hostel->longitude }}<br>
        <strong>Email:</strong> {{ $hostel->email }}<br>
        <strong>Phone:</strong> {{ $hostel->phone }}<br>
        <strong>Website:</strong> <a href="{{ $hostel->website }}" target="_blank">{{ $hostel->website }}</a><br>
        <strong>Description:</strong> {{ $hostel->description }}<br>
        <strong>Photo:</strong> {{ $hostel->photo }}<br>
        <strong>Open From:</strong> {{ $hostel->open_from }}<br>
        <strong>Open To:</strong> {{ $hostel->open_to }}<br>
        <strong>Snr Price:</strong> {{ $hostel->snr_price }}<br>
        <strong>Jnr Price:</strong> {{ $hostel->jnr_price }}
    </p>
</div>