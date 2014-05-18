<div class="col-md-10">
    <h1>Edit {{ $bookingitem->bookingitemname }}</h1>
</div>
<div class="col-md-2">
    <a href="{{ URL::to('bookingitems') }}" class="btn btn-info">BookingItems</a>
</div>

<div class="col-md-12">

    @include('partials.notifications')

    {{ Form::model($bookingitem, array('route' => array('bookingitems.update', $bookingitem->id), 'class' => 'form-horizontal', 'method' => 'PUT')) }}

    <div class="form-group">
        {{ /*Form::label('first_name', 'First Name', array('class' => "col-sm-2 control-label")) */}}
        <div class="col-sm-10">
            {{ /*Form::text('first_name', null, array('class' => 'form-control')) */}}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Edit the BookingItem!', array('class' => 'btn btn-primary')) }}
        </div>
    </div>

    {{ Form::close() }}
</div>