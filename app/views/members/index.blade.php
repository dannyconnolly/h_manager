<h1>All the Members</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Member Type</td>
            <td>Purchase Date</td>
            <td>Expiry Date</td>
            <td>Payment Received</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($members as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->first_name }}</td>
            <td>{{ $value->last_name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->member_type }}</td>
            <td>{{ $value->purchase_date }}</td>
            <td>{{ $value->expiry_date }}</td>
            <td>{{ $value->payement_recieved }}</td>
            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the member (uses the destroy method DESTROY /members/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'members/' . $value->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete this Member', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                <!-- show the member (uses the show method found at GET /members/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('members/' . $value->id) }}">Show this Member</a>

                <!-- edit this member (uses the edit method found at GET /members/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('members/' . $value->id . '/edit') }}">Edit this Member</a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>