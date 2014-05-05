<h1>Edit {{ $member->first_name }} {{ $member->last_name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($member, array('route' => array('members.update', $member->id), 'method' => 'PUT')) }}

<div class="form-group">
    {{ Form::label('first_name', 'First Name') }}
    {{ Form::text('first_name', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('last_name', 'Last Name') }}
    {{ Form::text('last_name', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('date_of_birth', 'Date of Birth') }}
    {{ Form::text('date_of_birth', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('address_line_1', 'Address Line 1') }}
    {{ Form::text('address_line_1', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('address_line_2', 'Address Line 2') }}
    {{ Form::text('address_line_2', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('address_town_city', 'Town/City') }}
    {{ Form::text('address_town_city', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('address_state_county', 'State/County') }}
    {{ Form::text('address_state_county', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('address_postcode', 'State/County') }}
    {{ Form::text('address_postcode', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('address_country', 'Country') }}
    {{ Form::select('address_country', array('0' => 'Select a Country', '1' => 'Ireland', '2' => 'Uk', '3' => 'USA'), null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('phone_1', 'Primary Contact Number') }}
    {{ Form::text('phone_1', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('phone_2', 'Secondary Contact Number') }}
    {{ Form::text('phone_2', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('member_type', 'Member Type') }}
    {{ Form::select('member_type', array('0' => 'Select a Member Type', '1' => 'Senior', '2' => 'Junior', '3' => 'Adult'), null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('comments', 'Comments') }}
    {{ Form::textarea('comments', null, array('class' => 'form-control')) }}
</div>

{{ Form::submit('Edit the Member!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
