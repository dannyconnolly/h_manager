<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title">Edit {{ $eventtype->name }}</h1>
    </div>
    <div class="panel-body">

        <!-- if there are creation errors, they will show here -->
        @if ( $errors->count() > 0 )
        <div class="alert alert-danger">
            {{ HTML::ul($errors->all()) }}
        </div>
        @endif

        {{ Form::model($eventtype, array('route' => array('eventtypes.update', $eventtype->id), 'method' => 'PUT')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Edit the EventType!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
</div>
