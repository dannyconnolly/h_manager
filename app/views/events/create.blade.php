<div class="col-md-10">
    <h1>Create Event</h1>
</div>
<div class="col-md-2">
    <a href="{{ URL::to('events') }}" class="btn btn-info">Back to Events</a>
</div>

<div class="col-md-12">

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'events', 'class' => 'form-horizontal')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('type', 'Type', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::select('type', $eventtypes, Input::old('type'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('hostel', 'Hostel', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::select('hostel', $hostels, Input::old('hostel'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('county', 'County', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::select('county', $counties, Input::old('county'), array('class' => 'form-control')) }}
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
