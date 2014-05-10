<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title">Create a Event</h1>
    </div>
    <div class="panel-body">

        <!-- if there are creation errors, they will show here -->
        {{ HTML::ul($errors->all()) }}

        {{ Form::open(array('url' => 'events')) }}

        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('type', 'Type') }}
            {{ Form::select('type', $eventtypes, Input::old('type'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('hostel', 'Hostel') }}
            {{ Form::select('hostel', $hostels, Input::old('hostel'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('county', 'County') }}
            {{ Form::select('county', array('0' => 'Select a county', '1' => 'Dublin', '2' => 'Tyrone', '3' => 'Wicklow'), Input::old('county'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('date_from', 'Date From') }}
            {{ Form::text('date_from', Input::old('date_from'), array('class' => 'form-control date-input')) }}
        </div>

        <div class="form-group">
            {{ Form::label('date_to', 'Date To') }}
            {{ Form::text('date_to', Input::old('date_to'), array('class' => 'form-control date-input')) }}
        </div>

        <div class="form-group">
            {{ Form::label('details', 'Details') }}
            {{ Form::textarea('details', Input::old('details'), array('class' => 'form-control')) }}
        </div>


        {{ Form::submit('Create the Event!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
</div>
