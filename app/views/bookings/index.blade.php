<div class="col-md-10">
    <h1>All Bookings</h1>
</div>
<div class="col-md-2">
    <a href="{{ URL::to('bookings/create') }}" class="btn btn-info">Create Booking</a>
</div>

<div class="col-md-12">

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Order Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->order_id }}</td>
                <td>{{ $value->first_name }}</td>
                <td>{{ $value->last_name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->status }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    <!-- show the booking (uses the show method found at GET /bookings/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('bookings/' . $value->id) }}"><span class="glyphicon glyphicon-eye-open"></span></a>

                    <!-- edit this booking (uses the edit method found at GET /bookings/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('bookings/' . $value->id . '/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>

                    <!-- delete the booking (uses the destroy method DESTROY /bookings/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(array('url' => 'bookings/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>