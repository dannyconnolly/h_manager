<div class="col-md-10">
    <h1>Edit {{ $hostel->name }}</h1>
</div>
<div class="col-md-2">
    <a class="btn btn-small btn-info" href="{{ URL::to('hostels/' . $hostel->id) }}">View</a>
</div>

<div class="col-md-12">

    <!-- if there are creation errors, they will show here -->
    @if ( $errors->count() > 0 )
    <div class="alert alert-danger">
        {{ HTML::ul($errors->all()) }}
    </div>
    @endif

    {{ Form::model($hostel, array('route' => array('hostels.update', $hostel->id), 'class' => 'form-horizontal', 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('address_line_1', 'Address Line 1', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('address_line_1', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('address_line_2', 'Address Line 2', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('address_line_2', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('address_town_city', 'Town/City', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('address_town_city', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('address_state_county', 'County', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::select('address_state_county', $counties, null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('latitude', 'Latitude', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('latitude', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('longitude', 'Longitude', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('longitude', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Booking Email', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::email('email', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('phone', 'Phone', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('phone', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('website', 'Website', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::url('website', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::textarea('description', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('photo', 'Photo', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('photo', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('open_from', 'Open From', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('open_from', null, array('class' => 'form-control date-input')) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('open_to', 'Open To', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('open_to', null, array('class' => 'form-control date-input')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Edit the Hostel!', array('class' => 'btn btn-primary')) }}
        </div>
    </div>


    {{ Form::close() }}
</div>