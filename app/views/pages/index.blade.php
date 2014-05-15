<div class="col-md-10">
    <h1>H Manager Front</h1>
</div>
<div class="col-md-2">

</div>

<div class="col-md-12">

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <!-- if there are creation errors, they will show here -->
    @if ( $errors->count() > 0 )
    <div class="alert alert-danger">
        {{ HTML::ul($errors->all()) }}
    </div>
    @endif

    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default panel-success">
            <div class="panel-heading">Book a Hostel</div>
            <div class="panel-body">
                {{ Form::open(array('url' => 'cart', 'class' => 'form-horizontal')) }}
                <div class="form-group">
                    {{ Form::label('hostel_id', 'Hostel', array('class' => "col-sm-2 control-label")) }}
                    <div class="col-sm-10">
                        <select name="hostel_id" class="form-control">
                            @foreach($hostels as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('arrival_date', 'Arrival Date', array('class' => "col-sm-2 control-label")) }}
                    <div class="col-sm-10">
                        {{ Form::html5_field( 'date', 'arrival_date', Input::old('arrival_date'), array('class' => 'form-control')) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('nights_stay', 'Nights stay', array('class' => "col-sm-2 control-label")) }}
                    <div class="col-sm-10">
                        {{ Form::html5_field('number', 'nights_stay', Input::old('nights_stay'), array('class' => 'form-control', 'min' => '1', 'max' => '20')) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('total_guests', 'Nights stay', array('class' => "col-sm-2 control-label")) }}
                    <div class="col-sm-10">
                        {{ Form::html5_field('number', 'total_guests', Input::old('total_guests'), array('class' => 'form-control', 'min' => '1', 'max' => '20')) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('snr_male_guests', 'Snr male guests', array('class' => "col-sm-2 control-label")) }}
                    <div class="col-sm-10">
                        {{ Form::html5_field('number', 'snr_male_guests', Input::old('snr_male_guests'), array('class' => 'form-control', 'min' => '0', 'max' => '20')) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('snr_female_guests', 'Snr female guests', array('class' => "col-sm-2 control-label")) }}
                    <div class="col-sm-10">
                        {{ Form::html5_field('number', 'snr_female_guests', Input::old('snr_female_guests'), array('class' => 'form-control', 'min' => '0', 'max' => '20')) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('jr_male_guests', 'Jnr male guests', array('class' => "col-sm-2 control-label")) }}
                    <div class="col-sm-10">
                        {{ Form::html5_field('number', 'jr_male_guests', Input::old('jr_male_guests'), array('class' => 'form-control', 'min' => '0', 'max' => '20')) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('jr_female_guests', 'Jnr female guests', array('class' => "col-sm-2 control-label")) }}
                    <div class="col-sm-10">
                        {{ Form::html5_field('number', 'jr_female_guests', Input::old('jr_female_guests'), array('class' => 'form-control', 'min' => '0', 'max' => '20')) }}
                    </div>
                </div>
                {{ Form::submit('Add to cart', array('class' => 'btn btn-success')) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>