<div class="col-md-10">
    <h1>Become a Member</h1>
</div>
<div class="col-md-2">
    <a href="{{ URL::to('members') }}" class="btn btn-info">Members</a>
</div>

<div class="col-md-12">

    @include('partials.notifications')

    {{ Form::open(array('url' => 'members', 'class' => 'form-horizontal')) }}

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
            {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
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
        {{ Form::label('address_town_city', 'Town/City', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('address_town_city', Input::old('address_town_city'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('address_state_county', 'State/County', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('address_state_county', Input::old('address_state_county'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('address_postcode', 'State/County', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('address_postcode', Input::old('address_postcode'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('address_country', 'Country', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::select('address_country', $countries, Input::old('address_country'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('phone_1', 'Primary Contact Number', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('phone_1', Input::old('phone_1'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('phone_2', 'Secondary Contact Number', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('phone_2', Input::old('phone_2'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('member_type_id', 'Member Type', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::select('member_type_id', $membertypes, Input::old('member_type_id'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('comments', 'Comments', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::textarea('comments', Input::old('comments'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Create the Member!', array('class' => 'btn btn-primary')) }}
        </div>
    </div>

    {{ Form::close() }}
</div>