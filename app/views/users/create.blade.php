<h1>Create a User</h1>

<!-- if there are creation errors, they will show here -->
@if ( $errors->count() > 0 )
<div class="alert alert-danger">
    {{ HTML::ul($errors->all()) }}
</div>
@endif

{{ Form::open(array('url' => 'users')) }}

<div class="form-group">
    {{ Form::label('username', 'Username') }}
    {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('password', 'Confirm Password') }}
    {{ Form::password('password', array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('role_id', 'User Level') }}
    {{ Form::select('role_id', array('0' => 'Select a Level', '1' => 'Dev Admin', '2' => 'Admin', '3' => 'Editor'), Input::old('role_id'), array('class' => 'form-control')) }}
</div>

{{ Form::submit('Create the User!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}