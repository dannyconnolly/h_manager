<div class="page-header">
    <h1 class="">Edit: {{ $event->title }}</h1>
    <a class="btn btn-small btn-info" href="{{ URL::to('events/' . $event->id) }}">View</a>
</div>

<div class="col-md-7">

    <!-- if there are creation errors, they will show here -->
    @include('partials.notifications')

    {{ Form::model($event, array('route' => array('events.update', $event->id), 'class' => 'form-horizontal', 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title', array('class' => "col-sm-4")) }}
        <div class="col-sm-8">
            {{ Form::text('title', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('eventtype_id', 'Event Type', array('class' => "col-sm-4")) }}
        <div class="col-sm-8">
            {{ Form::select('eventtype_id', $eventtypes, null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('hostel_id', 'Hostel', array('class' => "col-sm-4")) }}
        <div class="col-sm-8">
            {{ Form::select('hostel_id', $hostels, null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('county_id', 'County', array('class' => "col-sm-4")) }}
        <div class="col-sm-8">
            {{ Form::select('county_id', $counties, null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('date_from', 'Date From', array('class' => "col-sm-4")) }}
        <div class="col-sm-8">
            {{ Form::text('date_from', null, array('class' => 'form-control date-input')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('date_to', 'Date To', array('class' => "col-sm-4")) }}
        <div class="col-sm-8">
            {{ Form::text('date_to', null, array('class' => 'form-control date-input')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('details', 'Details', array('class' => "col-sm-4")) }}
        <div class="col-sm-8">
            {{ Form::textarea('details', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            {{ Form::submit('Edit the Event!', array('class' => 'btn btn-primary')) }}
        </div>
    </div>
    {{ Form::close() }}

</div>