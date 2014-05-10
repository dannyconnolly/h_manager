<div class="col-md-10">
    <h1>Create Member Type</h1>
</div>
<div class="col-md-2">
    <a href="{{ URL::to('membertypes') }}" class="btn btn-info">Member Types</a>
</div>

<div class="col-md-12">

    <!-- if there are creation errors, they will show here -->
    @if ( $errors->count() > 0 )
    <div class="alert alert-danger">
        {{ HTML::ul($errors->all()) }}
    </div>
    @endif

    {{ Form::open(array('url' => 'membertypes', 'class' => 'form-horizontal')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('cost', 'Cost', array('class' => "col-sm-2 control-label")) }}
        <div class="col-sm-10">
            {{ Form::text('cost',Input::old('cost'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Create the MemberType!', array('class' => 'btn btn-primary')) }}
        </div>
    </div>

    {{ Form::close() }}
</div>