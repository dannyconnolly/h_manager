<div class="col-md-10">
    <h1>Edit {{ $booking->bookingname }}</h1>
</div>
<div class="col-md-2">
    <a href="{{ URL::to('bookings') }}" class="btn btn-info">Bookings</a>
</div>

<div class="col-md-12">

    <!-- if there are creation errors, they will show here -->
    @if ( $errors->count() > 0 )
    <div class="alert alert-danger">
        {{ HTML::ul($errors->all()) }}
    </div>
    @endif

    {{ Form::model($booking, array('route' => array('bookings.update', $booking->id), 'class' => 'form-horizontal', 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('first_name', 'First Name', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('first_name', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('last_name', 'Last Name', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('last_name', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('date_of_birth', 'Date of Birth', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('date_of_birth', null, array('class' => 'form-control date-input')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('address_line_2', 'Address Line 2', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('address_line_2', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('town_city', 'Town/City', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('town_city', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('state_county', 'State/County', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('state_county', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('country_id', 'Address Line 1', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::select('country_id', $countries, null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('post_code', 'Post Code', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('post_code', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('phone_1', 'Phone 1', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('phone_1', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('phone_2', 'Phone 1', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('phone_2', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('member', 'Already a member?', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            No {{ Form::radio('member', '0',null) }}
            Yes {{ Form::radio('member', '1',null) }}
        </div>
    </div>

    <!-- if a member -->
    <div class="form-group">
        {{ Form::label('membership_number', 'Please enter your membership number and we will deduct the discount from your booking.', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('membership_number', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <!-- if not a member -->
    <div class="form-group">
        {{ Form::label('member_signup', 'Would you like to become a member?', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            No {{ Form::radio('member_signup', '0', null) }}
            Yes {{ Form::radio('member_signup', '1', null) }}
        </div>
    </div>

    <!-- If choose to become member select member ship -->
    <div class="form-group">
        {{ Form::label('member_type', 'Which membership would you like to join?', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::select('member_type', $membertypes, null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('requests', 'Any Additional Requests?', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::textarea('requests', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Edit the Booking!', array('class' => 'btn btn-primary')) }}
        </div>
    </div>

    {{ Form::close() }}
</div>