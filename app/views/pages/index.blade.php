<div class="col-md-10">
    <h1>H Manager</h1>
</div>

<div class="col-md-2">

</div>

<div class="col-md-12">

    @include('partials.notifications')

    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default panel-success">
            <div class="panel-heading">Book a Hostel</div>
            <div class="panel-body">
                {{ Form::open(array('url' => 'cart', 'class' => 'form-inline booking-form row' , 'name' => 'booking_form')) }}
                <div class="form-group col-md-5">
                    {{ Form::label('hostel_id', 'Hostel', array('class' => "")) }}

                    <select name="hostel_id" class="form-control" id="hostel_id" onchange="javascript: setHostelName(this);">
                        <option value="0">Choose a hostel</option>
                        @foreach($hostels as $key => $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                    </select> 
                    <!--{{Form::hidden('name',  null, array('id' => 'hostel_name_hidden'))}}-->
                    <script>
                        /*function setHostelName(selObj) {
                         document.forms['booking_form'].hostel_name_hidden.value = selObj.options[selObj.options.selectedIndex].text;
                         }*/
                    </script>
                </div>

                <div class="form-group col-md-3">
                    {{ Form::label('arrival_date', 'Arrival Date', array('class' => "")) }}
                    {{ Form::html5_field( 'date', 'arrival_date', Input::old('arrival_date'), array('class' => 'form-control')) }}
                </div>

                <div class="form-group col-md-2">
                    {{ Form::label('nights_stay', 'Nights stay', array('class' => "")) }}
                    {{ Form::html5_field('number', 'nights_stay', Input::old('nights_stay'), array('class' => 'form-control', 'min' => '1', 'max' => '20')) }}
                </div>

                <div class="form-group col-md-2">
                    {{ Form::label('total_guests', 'No. of guest', array('class' => "")) }}
                    {{ Form::html5_field('number', 'total_guests', Input::old('total_guests'), array('class' => 'form-control', 'min' => '1', 'max' => '20')) }}
                </div>
                <!--
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
                -->
                <div class="form-group col-md-12">
                    {{ Form::submit('Add to cart', array('class' => 'btn btn-success')) }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>