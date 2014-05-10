<div class="col-md-10">
    <h1>Members</h1>
</div>
<div class="col-md-2">
    <a href="{{ URL::to('members/create') }}" class="btn btn-info">Create Member</a>
</div>

<div class="col-md-12">

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Member Type</th>
                <th>Purchase Date</th>
                <th>Expiry Date</th>
                <th>Payment Received</th>
                <th>Actions</th>
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
                    <!-- show the member (uses the show method found at GET /members/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('members/' . $value->id) }}"><span class="glyphicon glyphicon-eye-open"></span></a>

                    <!-- edit this member (uses the edit method found at GET /members/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('members/' . $value->id . '/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>

                    <!-- delete the member (uses the destroy method DESTROY /members/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(array('url' => 'members/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>