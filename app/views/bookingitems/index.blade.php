<div class="col-md-10">
    <h1>All BookingItems</h1>
</div>
<div class="col-md-2">
    <a href="{{ URL::to('bookingitems/create') }}" class="btn btn-info">Create BookingItem</a>
</div>

<div class="col-md-12">

    @include('partials.notifications')

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>booking_id<i class="fa fa-sort"></i></th>
                <th>hostel_id<i class="fa fa-sort"></i></th>
                <th>arrival_date<i class="fa fa-sort"></i></th>
                <th>nights_stay<i class="fa fa-sort"></i></th>
                <th>total_guests<i class="fa fa-sort"></i></th>
                <th>snr_male_guests<i class="fa fa-sort"></i></th>
                <th>snr_female_guests<i class="fa fa-sort"></i></th>
                <th>jr_male_guests<i class="fa fa-sort"></i></th>
                <th>jr_female_guests<i class="fa fa-sort"></i></th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookingitems as $key => $value)
            <tr>
                <td>{{ $value->booking_id }}</td>
                <td>{{ $value->hostel_id }}</td>
                <td>{{ $value->arrival_date }}</td>
                <td>{{ $value->nights_stay }}</td>
                <td>{{ $value->total_guests }}</td>
                <td>{{ $value->snr_male_guests }}</td>
                <td>{{ $value->snr_female_guests }}</td>
                <td>{{ $value->jr_male_guests }}</td>
                <td>{{ $value->jr_female_guests }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    <!-- show the bookingitem (uses the show method found at GET /bookingitems/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('bookingitems/' . $value->id) }}"><i class="fa fa-eye"></i>View</a>

                    <!-- edit this bookingitem (uses the edit method found at GET /bookingitems/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('bookingitems/' . $value->id . '/edit') }}"><i class="fa fa-pencil"></i>Edit</a>

                    <!-- delete the bookingitem (uses the destroy method DESTROY /bookingitems/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(array('url' => 'bookingitems/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>