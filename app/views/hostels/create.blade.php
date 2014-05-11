<div class="col-md-10">
    <h1>Create Hostel</h1>
</div>
<div class="col-md-2">
    <a href="{{ URL::to('hostels') }}" class="btn btn-info">Hostels</a>
</div>
<div class="col-md-12">

    <!-- if there are creation errors, they will show here -->
    @if ( $errors->count() > 0 )
    <div class="alert alert-danger">
        {{ HTML::ul($errors->all()) }}
    </div>
    @endif

    {{ Form::open(array('url' => 'hostels', 'class' => 'form-horizontal')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('address_line_1', 'Address Line 1', array('class' => "col-sm-2 control-label") )}}
        <div class="col-sm-10">
            {{ Form::text('address_line_1', Input::old('address_line_1'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('address_line_2', 'Address Line 2', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('address_line_2', Input::old('address_line_2'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('address_town_city', 'Town/City', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('address_town_city', Input::old('address_town_city'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('address_state_county', 'County', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::select('address_state_county', $counties, Input::old('address_state_county'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('latitude', 'Latitude', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('latitude', Input::old('latitude'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('longitude', 'Longitude', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('longitude', Input::old('longitude'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Booking Email', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('phone', 'Phone', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('phone', Input::old('phone'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('website', 'Website', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::url('website', Input::old('website'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('photo', 'Photo', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('photo', Input::old('photo'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('open_from', 'Open From', array('class' => "col-sm-2 control-label"))}}
        <div class="col-sm-10">
            {{ Form::text('open_from', Input::old('open_from'), array('class' => 'form-control date-input')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('open_to', 'Open To', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('open_to', Input::old('open_to'), array('class' => 'form-control date-input')) }}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Create the Hostel!', array('class' => 'btn btn-primary')) }}
        </div>
    </div>
    {{ Form::close() }}
</div>