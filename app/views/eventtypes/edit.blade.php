<h1>Edit {{ $eventtype->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($eventtype, array('route' => array('eventtypes.update', $eventtype->id), 'method' => 'PUT')) }}

<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, array('class' => 'form-control')) }}
</div>

{{ Form::submit('Edit the EventType!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
