<div class="col-md-10">
    <h1>Showing {{ $member->first_name }} {{ $member->last_name }}</h1>
</div>
<div class="col-md-2">
    <a class="btn btn-small btn-info" href="{{ URL::to('members/' . $member->id . '/edit') }}">Edit this Member</a>
</div>

<div class="col-md-12">
    <p>
        <strong>Name:</strong> {{ $member->first_name }} {{ $member->last_name }}<br>
        <strong>Email:</strong> {{ $member->email }}<br>
        <strong>Date of Birth:</strong> {{ $member->date_of_birth }}<br>
        <strong>Address Line 1:</strong> {{ $member->address_line_1 }}<br>
        <strong>Address Line 2:</strong> {{ $member->address_line_2 }}<br>
        <strong>Town/City:</strong> {{ $member->address_town_city }}<br>
        <strong>State/County:</strong> {{ $member->address_state_county }}<br>
        <strong>Postcode:</strong> {{ $member->address_postcode }}<br>
        <strong>Country:</strong> {{ $member->address_country }}<br>
        <strong>Primary Contact Number:</strong> {{ $member->phone_1 }}<br>
        <strong>Secondary Contact Number:</strong> {{ $member->phone_2 }}<br>
        <strong>Member Type:</strong> {{ $member->member_type }}<br>
        <strong>Comments:</strong> {{ $member->comments }}<br>
        <strong>Purchase Date:</strong> {{ $member->purchase_date }}<br>
        <strong>Expiry Date:</strong> {{ $member->expiry_date }}<br>
        <strong>Auth Code:</strong> {{ $member->auth_code }}<br>
        <strong>Order ID:</strong> {{ $member->order_id }}<br>
        <strong>Payment Received:</strong> {{ $member->payement_recieved }}
    </p>
</div>
