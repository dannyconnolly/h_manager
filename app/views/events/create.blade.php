<h1>Create a Event</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'events')) }}

<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('type', 'Type') }}
    {{ Form::select('type', array('0' => 'Select a type', '1' => 'Festival', '2' => 'Walk', '3' => 'Other'), Input::old('type'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('hostel', 'Hostel') }}
    {{ Form::select('hostel', array('0' => 'Select a hostel', '1' => 'Hostel 1', '2' => 'Hostel 2', '3' => 'Hostel 3'), Input::old('hostel'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('county', 'County') }}
    {{ Form::select('county', array('0' => 'Select a county', '1' => 'Dublin', '2' => 'Tyrone', '3' => 'Wicklow'), Input::old('county'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('date_from', 'Date From') }}
    {{ Form::text('date_from', Input::old('date_from'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('date_to', 'Date To') }}
    {{ Form::text('date_to', Input::old('date_to'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('details', 'Details') }}
    {{ Form::textarea('details', Input::old('details'), array('class' => 'form-control')) }}
</div>


{{ Form::submit('Create the Event!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
