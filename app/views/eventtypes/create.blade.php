<h1>Create a Event Type</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'eventtypes')) }}

<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
</div>

{{ Form::submit('Create the EventType!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
