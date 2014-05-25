<div class="page-header">
    <h1 class="">{{ $hostel->name }}</h1>
    <a class="btn btn-small btn-info" href="{{ URL::to('hostels/' . $hostel->id . '/edit') }}">Edit Hostel</a>
</div>

<div class="col-md-7">
    @include('partials.notifications')
    <p>
        <strong>Name:</strong> {{ $hostel->name }}<br>
        <strong>Address Line 1:</strong> {{ $hostel->address_line_1 }}<br>
        <strong>Address Line 2:</strong> {{ $hostel->address_line_2 }}<br>
        <strong>Town/City:</strong> {{ $hostel->town_city }}<br>
        <strong>County:</strong> {{ SiteHelper::getCOuntyName($hostel->state_county) }}<br>
        <strong>Latitude:</strong> {{ $hostel->latitude }}<br>
        <strong>Longitude:</strong> {{ $hostel->longitude }}<br>
        <strong>Email:</strong> {{ $hostel->email }}<br>
        <strong>Phone:</strong> {{ $hostel->phone }}<br>
        <strong>Website:</strong> <a href="{{ $hostel->website }}" target="_blank">{{ $hostel->website }}</a><br>
        <strong>Description:</strong> {{ $hostel->description }}<br>
        <strong>Photo:</strong> <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" width="140" height="140" /><br>
        <strong>Open From:</strong> {{ $hostel->open_from }}<br>
        <strong>Open To:</strong> {{ $hostel->open_to }}<br>
        <strong>Snr Price:</strong> {{ $hostel->snr_price }}<br>
        <strong>Jnr Price:</strong> {{ $hostel->jnr_price }}
    </p>
</div>