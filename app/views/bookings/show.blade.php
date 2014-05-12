<div class="col-md-10">
    <h1>Showing  #{{ $booking->order_id }}</h1>
</div>
<div class="col-md-2">
    <a class="btn btn-small btn-info" href="{{ URL::to('bookings/' . $booking->id . '/edit') }}">Edit</a>
</div>

<div class="col-md-12">
    <p>
        <strong>Order ID:</strong> {{ $booking->order_id }}<br>
        <strong>Name:</strong> {{ $booking->first_name }} {{ $booking->last_name }}<br>
        <strong>Email:</strong> {{ $booking->email }}<br>
        <strong>Date of Birth:</strong> {{ $booking->date_of_birth }}<br>
        <strong>Address Line 1:</strong> {{ $booking->address_line_1 }}<br>
        <strong>Address Line 2:</strong> {{ $booking->address_line_2 }}<br>
        <strong>Town/City:</strong> {{ $booking->address_town_city }}<br>
        <strong>State/County:</strong> {{ $booking->address_state_county }}<br>
        <strong>Postcode:</strong> {{ $booking->address_postcode }}<br>
        <strong>Country:</strong> {{ $booking->address_country }}<br>
        <strong>Primary Contact Number:</strong> {{ $booking->phone_1 }}<br>
        <strong>Secondary Contact Number:</strong> {{ $booking->phone_2 }}<br>
        <strong>Member:</strong> {{ $booking->member }}<br>
        <strong>membership_number:</strong> {{ $booking->membership_number }}<br>
        <strong>member_signup:</strong> {{ $booking->member_signup }}<br>
        <strong>member_type:</strong> {{ $booking->member_type }}<br>
        <strong>status:</strong> {{ $booking->status }}<br>
        <strong>who_added:</strong> {{ $booking->who_added }}<br>
        <strong>source:</strong> {{ $booking->source }}
    </p>
</div>
