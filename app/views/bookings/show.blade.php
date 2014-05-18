<div class="col-md-10">
    <h1>Showing  #{{ $booking->order_id }}</h1>
</div>
<div class="col-md-2">
    <a class="btn btn-small btn-info" href="{{ URL::to('bookings/' . $booking->id . '/edit') }}">Edit</a>
</div>

<div class="col-md-12">
    @include('partials.notifications')
    <p>
        <strong>Order ID:</strong> {{ $booking->order_id }}<br>
        <strong>Name:</strong> {{ $booking->first_name }} {{ $booking->last_name }}<br>
        <strong>Email:</strong> {{ $booking->email }}<br>
        <strong>Date of Birth:</strong> {{ $booking->date_of_birth }}<br>
        <strong>Address Line 1:</strong> {{ $booking->address_line_1 }}<br>
        <strong>Address Line 2:</strong> {{ $booking->address_line_2 }}<br>
        <strong>Town/City:</strong> {{ $booking->town_city }}<br>
        <strong>State/County:</strong> {{ $booking->state_county }}<br>
        <strong>Postcode:</strong> {{ $booking->post_code }}<br>
        <strong>Country:</strong> {{ $booking->country_id }}<br>
        <strong>Primary Contact Number:</strong> {{ $booking->phone_1 }}<br>
        <strong>Secondary Contact Number:</strong> {{ $booking->phone_2 }}<br>
        <strong>Member:</strong> {{ $booking->member }}<br>
        <strong>Membership Number:</strong> {{ $booking->membership_number }}<br>
        <strong>Member Signup:</strong> {{ $booking->member_signup }}<br>
        <strong>Member Type:</strong> {{ $booking->member_type }}<br>
        <strong>Status:</strong> {{ $booking->status }}<br>
        <strong>Who Added:</strong> {{ $booking->who_added }}<br>
        <strong>Source:</strong> {{ $booking->source }}
    </p>
</div>
