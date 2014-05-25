<div class="col-md-10">
    <h1>Create a Booking</h1>
</div>
<div class="col-md-2">
    <a href="{{ URL::to('bookings') }}" class="btn btn-info">Bookings</a>
</div>

<div class="col-md-12">

    @include('partials.notifications')

    {{ Form::open(array('url' => 'bookings', 'class' => 'form-horizontal')) }}
    {{ Form::hidden('order_id', 'dfghjmdfgdsfgfcfvcfvfcfvx') }}
    {{ Form::hidden('booking_date', '2013-02-02') }}
    <div class="form-group">
        {{ Form::label('first_name', 'First Name', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('last_name', 'Last Name', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('date_of_birth', 'Date of Birth', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('date_of_birth', Input::old('date_of_birth'), array('class' => 'form-control date-input')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('address_line_1', 'Address Line 1', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('address_line_1', Input::old('address_line_1'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('address_line_2', 'Address Line 2', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('address_line_2', Input::old('address_line_2'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('town_city', 'Town/City', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('town_city', Input::old('town_city'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('state_county', 'State/County', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('state_county', Input::old('state_county'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('country_id', 'Country', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::select('country_id', $countries, Input::old('country_id'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('post_code', 'Post Code', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('post_code', Input::old('post_code'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('phone_1', 'Phone 1', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('phone_1', Input::old('phone_1'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('phone_2', 'Phone 1', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('phone_2', Input::old('phone_2'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('member', 'Already a member?', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            No {{ Form::radio('member', '0', (Input::old('member') == '0') ? true : false) }}
            Yes {{ Form::radio('member', '1', (Input::old('member') == '1') ? true : false) }}
        </div>
    </div>

    <!-- if a member -->
    <div class="form-group">
        {{ Form::label('membership_number', 'Please enter your membership number and we will deduct the discount from your booking.', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('membership_number', Input::old('membership_number'), array('class' => 'form-control')) }}
        </div>
    </div>

    <!-- if not a member -->
    <div class="form-group">
        {{ Form::label('member_signup', 'Would you like to become a member?', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            No {{ Form::radio('member_signup', '0', (Input::old('member_signup') == '0') ? true : false) }}
            Yes {{ Form::radio('member_signup', '1', (Input::old('member_signup') == '1') ? true : false) }}
        </div>
    </div>

    <!-- If choose to become member select member ship -->
    <div class="form-group">
        {{ Form::label('member_type', 'Which membership would you like to join?', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::select('member_type', $membertypes, Input::old('member_type'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('requests', 'Any Additional Requests?', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::textarea('requests', Input::old('requests'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Create the Booking!', array('class' => 'btn btn-primary')) }}
        </div>
    </div>

    {{ Form::close() }}

</div>