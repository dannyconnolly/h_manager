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

    <ul>
        @foreach($hostels as $key => $value)
        <li>
            <h3>{{ $value->name }}</h3>


            <!-- delete the user (uses the destroy method DESTROY /users/{id} -->
            <!-- we will add this later since its a little more complicated than the other two buttons -->
            {{ Form::open(array('url' => 'cart', 'class' => 'form-horizontal')) }}            
            {{ Form::hidden('hostel_id', $value->id) }}
            {{ Form::hidden('name', $value->name) }}

            <div class="form-group">
                {{ Form::label('arrival_date', 'Arrival Date', array('class' => "col-sm-2 control-label")) }}
                <div class="col-sm-10">
                    {{ Form::text('arrival_date', Input::old('arrival_date'), array('class' => 'form-control date-input')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('nights_stay', 'Nights stay', array('class' => "col-sm-2 control-label")) }}
                <div class="col-sm-10">
                    {{ Form::text('nights_stay', Input::old('nights_stay'), array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('total_guests', 'Nights stay', array('class' => "col-sm-2 control-label")) }}
                <div class="col-sm-10">
                    {{ Form::text('total_guests', Input::old('total_guests'), array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('snr_male_guests', 'Snr male guests', array('class' => "col-sm-2 control-label")) }}
                <div class="col-sm-10">
                    {{ Form::text('snr_male_guests', Input::old('snr_male_guests'), array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('snr_female_guests', 'Snr female guests', array('class' => "col-sm-2 control-label")) }}
                <div class="col-sm-10">
                    {{ Form::text('snr_female_guests', Input::old('snr_female_guests'), array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('jr_male_guests', 'Jnr male guests', array('class' => "col-sm-2 control-label")) }}
                <div class="col-sm-10">
                    {{ Form::text('jr_male_guests', Input::old('jr_male_guests'), array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('jr_female_guests', 'Jnr female guests', array('class' => "col-sm-2 control-label")) }}
                <div class="col-sm-10">
                    {{ Form::text('jr_female_guests', Input::old('jr_female_guests'), array('class' => 'form-control')) }}
                </div>
            </div>

            {{ Form::submit('Add to cart', array('class' => 'btn btn-success')) }}
            {{ Form::close() }}
        </li>
        @endforeach

    </ul>
</div>