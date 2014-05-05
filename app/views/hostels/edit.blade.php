
<h1>Edit {{ $hostel->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($hostel, array('route' => array('hostels.update', $hostel->id), 'method' => 'PUT')) }}

<div class="form-group">
    {{ Form::label('name', 'name') }}
    {{ Form::text('name', null, array('class' => 'form-control')) }}
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
    {{ Form::label('address_state_county', 'County') }}
    {{ Form::select('address_state_county', array('0' => 'Select a Level', '1' => 'Dev Admin', '2' => 'Admin', '3' => 'Editor'), null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('latitude', 'Latitude') }}
    {{ Form::text('latitude', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('longitude', 'Longitude') }}
    {{ Form::text('longitude', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'Booking Email') }}
    {{ Form::email('email', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('phone', 'Phone') }}
    {{ Form::text('phone', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('website', 'Website') }}
    {{ Form::url('website', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('photo', 'Photo') }}
    {{ Form::text('photo', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('open_from', 'Open From') }}
    {{ Form::text('open_from', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('open_to', 'Open To') }}
    {{ Form::text('open_to', null, array('class' => 'form-control')) }}
</div>

{{ Form::submit('Edit the Hostel!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}