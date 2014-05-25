<div class="page-header">
    <h1 class="">Create Event</h1>
    <a href="{{ URL::to('events') }}" class="btn btn-info">Events</a>
</div>

<div class="col-md-7">

    @include('partials.notifications')

    {{ Form::open(array('url' => 'events', 'class' => 'form-horizontal')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title', array('class' => "col-sm-4")) }}
        <div class="col-sm-8">
            {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('eventtype_id', 'Event Type', array('class' => "col-sm-4")) }}
        <div class="col-sm-8">
            {{ Form::select('eventtype_id', $eventtypes, Input::old('eventtype_id'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('hostel_id', 'Hostel', array('class' => "col-sm-4")) }}
        <div class="col-sm-8">
            {{ Form::select('hostel_id', $hostels, Input::old('hostel_id'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('county_id', 'County', array('class' => "col-sm-4")) }}
        <div class="col-sm-8">
            {{ Form::select('county_id', $counties, Input::old('county_id'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('date_from', 'Date From', array('class' => "col-sm-4")) }}
        <div class="col-sm-8">
            {{ Form::text('date_from', Input::old('date_from'), array('class' => 'form-control date-input')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('date_to', 'Date To', array('class' => "col-sm-4")) }}
        <div class="col-sm-8">
            {{ Form::text('date_to', Input::old('date_to'), array('class' => 'form-control date-input')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('details', 'Details', array('class' => "col-sm-4")) }}
        <div class="col-sm-8">
            {{ Form::textarea('details', Input::old('details'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            {{ Form::submit('Create the Event!', array('class' => 'btn btn-primary')) }}
        </div>
    </div>

    {{ Form::close() }}

</div>
