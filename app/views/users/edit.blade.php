<h1>Edit {{ $user->username }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}

<div class="form-group">
    {{ Form::label('username', 'Username') }}
    {{ Form::text('username', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email', null, array('class' => 'form-control')) }}
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
    {{ Form::select('role_id', array('0' => 'Select a Level', '1' => 'Dev Admin', '2' => 'Admin', '3' => 'Editor'), null, array('class' => 'form-control')) }}
</div>

{{ Form::submit('Edit the User!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
