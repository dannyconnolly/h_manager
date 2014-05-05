<h1>Create a Member Type</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'membertypes')) }}

<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('cost', 'Cost') }}
    {{ Form::text('cost',Input::old('cost'), array('class' => 'form-control')) }}
</div>


{{ Form::submit('Create the MemberType!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
