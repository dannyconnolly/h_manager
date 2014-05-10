<div class="col-md-10">
    <h1>Edit {{ $member->first_name }} {{ $member->last_name }}</h1>
</div>
<div class="col-md-2">
    <a class="btn btn-small btn-info" href="{{ URL::to('members/' . $member->id) }}">View</a>
</div>

<div class="col-md-12">


    <!-- if there are creation errors, they will show here -->
    @if ( $errors->count() > 0 )
    <div class="alert alert-danger">
        {{ HTML::ul($errors->all()) }}
    </div>
    @endif

    {{ Form::model($member, array('route' => array('members.update', $member->id), 'class' => 'form-horizontal', 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('first_name', 'First Name', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('first_name', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('last_name', 'Last Name', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('last_name', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::email('email', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('date_of_birth', 'Date of Birth', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('date_of_birth', null, array('class' => 'form-control')) }}
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
        {{ Form::label('address_state_county', 'State/County', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('address_state_county', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('address_postcode', 'State/County', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('address_postcode', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('address_country', 'Country', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::select('address_country', $countries, null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('phone_1', 'Primary Contact Number', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('phone_1', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('phone_2', 'Secondary Contact Number', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('phone_2', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('member_type', 'Member Type', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::select('member_type', $membertypes, null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('comments', 'Comments', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">        
            {{ Form::textarea('comments', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Edit the Member!', array('class' => 'btn btn-primary')) }}
        </div>
    </div>

    {{ Form::close() }}
</div>