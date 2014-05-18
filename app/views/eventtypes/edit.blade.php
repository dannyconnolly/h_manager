<div class="col-md-10">
    <h1>Edit {{ $eventtype->name }}</h1>
</div>
<div class="col-md-2">
    <a class="btn btn-small btn-info" href="{{ URL::to('eventtypes/' . $eventtype->id) }}">Show Event Type</a>
</div>

<div class="col-md-12">

    @include('partials.notifications')

    {{ Form::model($eventtype, array('route' => array('eventtypes.update', $eventtype->id), 'class' => 'form-horizontal', 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Edit the EventType!', array('class' => 'btn btn-primary')) }}
        </div>
    </div>
    {{ Form::close() }}

</div>
