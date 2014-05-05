<h1>Create a Member</h1>

<!-- if there are creation errors, they will show here -->
@if ( $errors->count() > 0 )
<div class="alert alert-danger">
    {{ HTML::ul($errors->all()) }}
</div>
@endif

{{ Form::open(array('url' => 'members')) }}

<div class="form-group">
    {{ Form::label('first_name', 'First Name') }}
    {{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('last_name', 'Last Name') }}
    {{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('date_of_birth', 'Date of Birth') }}
    {{ Form::text('date_of_birth', Input::old('date_of_birth'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('address_line_1', 'Address Line 1') }}
    {{ Form::text('address_line_1', Input::old('address_line_1'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('address_line_2', 'Address Line 2') }}
    {{ Form::text('address_line_2', Input::old('address_line_2'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('address_town_city', 'Town/City') }}
    {{ Form::text('address_town_city', Input::old('address_town_city'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('address_state_county', 'State/County') }}
    {{ Form::text('address_state_county', Input::old('address_state_county'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('address_postcode', 'State/County') }}
    {{ Form::text('address_postcode', Input::old('address_postcode'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('address_country', 'Country') }}
    {{ Form::select('address_country', array('0' => 'Select a Country', '1' => 'Ireland', '2' => 'Uk', '3' => 'USA'), Input::old('address_country'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('phone_1', 'Primary Contact Number') }}
    {{ Form::text('phone_1', Input::old('phone_1'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('phone_2', 'Secondary Contact Number') }}
    {{ Form::text('phone_2', Input::old('phone_2'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('member_type', 'Member Type') }}
    {{ Form::select('member_type', array('0' => 'Select a Member Type', '1' => 'Senior', '2' => 'Junior', '3' => 'Adult'), Input::old('member_type'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('comments', 'Comments') }}
    {{ Form::textarea('comments', Input::old('comments'), array('class' => 'form-control')) }}
</div>

{{ Form::submit('Create the Member!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
