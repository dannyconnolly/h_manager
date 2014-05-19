<div class="col-md-10">
    <h1>Create Event</h1>
</div>
<div class="col-md-2">
    <a href="{{ URL::to('events') }}" class="btn btn-info">Back to Events</a>
</div>

<div class="col-md-12">

    @include('partials.notifications')

    {{ Form::open(array('url' => 'events', 'class' => 'form-horizontal')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('event_type_id', 'Event Type', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::select('event_type_id', $eventtypes, Input::old('event_type_id'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('hostel_id', 'Hostel', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::select('hostel_id', $hostels, Input::old('hostel_id'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('county_id', 'County', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::select('county_id', $counties, Input::old('county_id'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('date_from', 'Date From', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('date_from', Input::old('date_from'), array('class' => 'form-control date-input')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('date_to', 'Date To', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('date_to', Input::old('date_to'), array('class' => 'form-control date-input')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('details', 'Details', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::textarea('details', Input::old('details'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Create the Event!', array('class' => 'btn btn-primary')) }}
        </div>
    </div>

    {{ Form::close() }}

</div>
