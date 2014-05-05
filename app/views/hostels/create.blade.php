<h1>Create a Hostel</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'hostels')) }}

<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
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
    {{ Form::label('address_state_county', 'County') }}
    {{ Form::select('address_state_county', array('0' => 'Select a County', '1' => 'Dublin', '2' => 'Antrim', '3' => 'Armagh', '4' => 'Tyrone', '5' => 'Carlow', '6' => 'Wicklow'), Input::old('address_state_county'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('latitude', 'Latitude') }}
    {{ Form::text('latitude', Input::old('latitude'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('longitude', 'Longitude') }}
    {{ Form::text('longitude', Input::old('longitude'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'Booking Email') }}
    {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('phone', 'Phone') }}
    {{ Form::text('phone', Input::old('phone'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('website', 'Website') }}
    {{ Form::url('website', Input::old('website'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('photo', 'Photo') }}
    {{ Form::text('photo', Input::old('photo'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('open_from', 'Open From') }}
    {{ Form::text('open_from', Input::old('open_from'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('open_to', 'Open To') }}
    {{ Form::text('open_to', Input::old('open_to'), array('class' => 'form-control')) }}
</div>

{{ Form::submit('Create the Hostel!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
