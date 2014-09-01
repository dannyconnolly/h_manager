<div class="page-header">
    <h1 class="">Hostels</h1>
</div>

<div class="col-md-12">

    @include('partials.notifications')

    <ul class="list-group hostel-list-group">
        @foreach($hostellistings as $key => $value)
        <li class="list-group-item">
            <div class="media">
                <div class="pull-left">
                    <a href="{{ URL::to('hostels/' . $value->id) }}">
                        <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 64px; height: 64px;">
                    </a>
                    <a class="btn btn-primary btn-block" href="{{ URL::to('hostels/' . $value->id) }}">View</a>
                    <button class="btn btn-success btn-block book-btn" data-hostel="{{ $value->id }}">Book</button>
                </div>

                <div class="media-body">
                    <h4 class="media-heading"><a href="{{ URL::to('hostels/' . $value->id) }}">{{ $value->name }}</a></h4>
                    <small>Open between {{ $value->open_from }} - {{ $value->open_to }}</small>
                    <p>{{ $value->description }}</p>
                </div>
            </div>
        </li>
        @endforeach
    </ul>

    {{ $hostellistings->links() }}
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    {{ Form::open(array('url' => 'cart', 'class' => 'form-horizontal' , 'name' => 'booking_form')) }}
    {{ Form::hidden('hostel_id', null, array('class' => 'hidden_hostel'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Book Hostel</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    {{ Form::label('hostel_id', 'Hostel', array('class' => "col-sm-4")) }}
                    <div class="col-sm-8">
                        {{ Form::select('hostel_id', $hostels, Input::old('hostel_name'), array('class' => 'form-control hostel_name')) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('arrival_date', 'Arrival Date', array('class' => "col-sm-4")) }}
                    <div class="col-sm-8">
                        <div class="input-group">
                            {{ Form::html5_field( 'date', 'arrival_date', Input::old('arrival_date'), array('class' => 'form-control')) }}
                            <span class="input-group-addon">
                                <i class="fa fa-calendar bigger-110"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('nights_stay', 'Nights stay', array('class' => "col-sm-4")) }}
                    <div class="col-sm-8">
                        {{ Form::html5_field('number', 'nights_stay', Input::old('nights_stay'), array('class' => 'form-control', 'min' => '1', 'max' => '20')) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('total_guests', 'No. of guest', array('class' => "col-sm-4")) }}
                    <div class="col-sm-8">
                        {{ Form::html5_field('number', 'total_guests', Input::old('total_guests'), array('class' => 'form-control', 'min' => '1', 'max' => '20')) }}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                {{ Form::submit('Book Now!', array('class' => 'btn btn-success')) }}
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    {{ Form::close() }}
</div><!-- /.modal -->
