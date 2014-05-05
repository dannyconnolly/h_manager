<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title">Create a Event Type</h1>
    </div>
    <div class="panel-body">

        <!-- if there are creation errors, they will show here -->
        @if ( $errors->count() > 0 )
        <div class="alert alert-danger">
            {{ HTML::ul($errors->all()) }}
        </div>
        @endif

        {{ Form::open(array('url' => 'eventtypes')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Create the EventType!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
</div>