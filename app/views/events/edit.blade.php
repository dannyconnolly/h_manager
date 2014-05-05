
<h1>Edit {{ $event->title }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($event, array('route' => array('events.update', $event->id), 'method' => 'PUT')) }}

<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('type', 'Type') }}
    {{ Form::select('type', array('0' => 'Select a type', '1' => 'Festival', '2' => 'Walk', '3' => 'Other'), null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('hostel', 'Hostel') }}
    {{ Form::select('hostel', array('0' => 'Select a hostel', '1' => 'Hostel 1', '2' => 'Hostel 2', '3' => 'Hostel 3'), null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('county', 'County') }}
    {{ Form::select('county', array('0' => 'Select a county', '1' => 'Dublin', '2' => 'Tyrone', '3' => 'Wicklow'), null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('date_from', 'Date From') }}
    {{ Form::text('date_from', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('date_to', 'Date To') }}
    {{ Form::text('date_to', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('details', 'Details') }}
    {{ Form::textarea('details', null, array('class' => 'form-control')) }}
</div>

{{ Form::submit('Edit the Event!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
