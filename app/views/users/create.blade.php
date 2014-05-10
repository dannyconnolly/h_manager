<div class="col-md-10">
    <h1>Create a User</h1>
</div>
<div class="col-md-2">
    <a href="{{ URL::to('users') }}" class="btn btn-info">Users</a>
</div>

<div class="col-md-12">

    <!-- if there are creation errors, they will show here -->
    @if ( $errors->count() > 0 )
    <div class="alert alert-danger">
        {{ HTML::ul($errors->all()) }}
    </div>
    @endif

    {{ Form::open(array('url' => 'users', 'class' => 'form-horizontal')) }}

    <div class="form-group">
        {{ Form::label('username', 'Username', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Password', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Confirm Password', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('role_id', 'User Level', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::select('role_id', array('0' => 'Select a Level', '1' => 'Dev Admin', '2' => 'Admin', '3' => 'Editor'), Input::old('role_id'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Create the User!', array('class' => 'btn btn-primary')) }}
        </div>
    </div>

    {{ Form::close() }}

</div>