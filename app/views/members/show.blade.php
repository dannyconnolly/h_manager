<div class="page-header">
    <h1 class="">{{ $member->first_name }} {{ $member->last_name }}</h1>
    <a class="btn btn-small btn-info" href="{{ URL::to('members/' . $member->id . '/edit') }}">Edit this Member</a>
</div>

<div class="col-md-7">
    @include('partials.notifications')
    <p>
        <strong>Name:</strong> {{ $member->first_name }} {{ $member->last_name }}<br>
        <strong>Email:</strong> {{ $member->email }}<br>
        <strong>Date of Birth:</strong> {{ $member->date_of_birth }}<br>
        <strong>Address Line 1:</strong> {{ $member->address_line_1 }}<br>
        <strong>Address Line 2:</strong> {{ $member->address_line_2 }}<br>
        <strong>Town/City:</strong> {{ $member->town_city }}<br>
        <strong>State/County:</strong> {{ $member->state_county }}<br>
        <strong>Postcode:</strong> {{ $member->postcode }}<br>
        <strong>Country:</strong> {{ SiteHelper::getCountryName($member->country) }}<br>
        <strong>Primary Contact Number:</strong> {{ $member->phone_1 }}<br>
        <strong>Secondary Contact Number:</strong> {{ $member->phone_2 }}<br>
        <strong>Member Type:</strong> {{ $member->membertype->name }}<br>
        <strong>Comments:</strong> {{ $member->comments }}<br>
        <strong>Purchase Date:</strong> {{ $member->purchase_date }}<br>
        <strong>Expiry Date:</strong> {{ $member->expiry_date }}<br>
        <strong>Auth Code:</strong> {{ $member->auth_code }}<br>
        <strong>Order ID:</strong> {{ $member->order_id }}<br>
        <strong>Payment Received:</strong> {{ $member->payement_recieved }}
    </p>
</div>
