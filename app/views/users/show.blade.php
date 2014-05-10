<div class="col-md-10">
    <h1>Showing {{ $user->username }}</h1>
</div>
<div class="col-md-2">
    <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $user->id . '/edit') }}">Edit</a>
</div>

<div class="col-md-12">
    <p>
        <strong>Username:</strong> {{ $user->username }}<br>
        <strong>Email:</strong> {{ $user->email }}<br>
        <strong>Level:</strong> {{ $user->role_id }}
    </p>
</div>
