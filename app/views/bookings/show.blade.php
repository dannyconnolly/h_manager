<div class="page-header">
    <h1>Showing  #{{ $booking->order_id }}</h1>
    <a class="btn btn-small btn-info" href="{{ URL::to('bookings/' . $booking->id . '/edit') }}">Edit</a>
</div>

<div class="col-md-12 view">
    @include('partials.notifications')
    <div class="col-md-6">
        <p><strong>Order ID:</strong> {{ $booking->order_id }}</p>
        <p><strong>Name:</strong> {{ $booking->first_name }} {{ $booking->last_name }}</p>
        <p><strong>Email:</strong> {{ $booking->email }}</p>
        <p><strong>Date of Birth:</strong> {{ $booking->date_of_birth }}</p>
        <p><strong>Address Line 1:</strong> {{ $booking->address_line_1 }}</p>
        <p><strong>Address Line 2:</strong> {{ $booking->address_line_2 }}</p>
        <p><strong>Town/City:</strong> {{ $booking->town_city }}</p>
        <p><strong>State/County:</strong> {{ $booking->state_county }}</p>
        <p><strong>Postcode:</strong> {{ $booking->post_code }}</p>
        <p><strong>Country:</strong> {{ SiteHelper::getCountryName($booking->country_id) }}</p>
    </div>

    <div class="col-md-6">
        <p><strong>Primary Contact Number:</strong> {{ $booking->phone_1 }}</p>
        <p><strong>Secondary Contact Number:</strong> {{ $booking->phone_2 }}</p>
        <p><strong>Member:</strong> {{ $member_already = $booking->member = 1 ? 'Yes' : 'No' }}</p>
        <p><strong>Membership Number:</strong> {{ $booking->membership_number }}</p>
        <p><strong>Member Signup:</strong> {{ $sign_up_as_member = $booking->member_signup = 1 ? 'Yes' : 'No' }}</p>
        <p><strong>Member Type:</strong> {{ $booking->member_type }}</p>
        <p><strong>Status:</strong> {{ $booking->status }}</p>
        <p><strong>Who Added:</strong> {{ $booking->who_added }}</p>
        <p><strong>Source:</strong> {{ $booking->source }}</p>
    </div>
</div>
