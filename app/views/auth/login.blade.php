<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title">Login</h1>
    </div>
    <div class="panel-body">
        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <!-- if there are creation errors, they will show here -->
        @if ( $errors->count() > 0 )
        <div class="alert alert-danger">
            {{ HTML::ul($errors->all()) }}
        </div>
        @endif

        {{ Form::open(array('url' => '/login')) }}

        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Create the User!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
</div>