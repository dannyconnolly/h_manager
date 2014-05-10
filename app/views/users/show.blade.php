
<h1>Showing {{ $user->username }}</h1>
<a class="btn btn-small btn-info" href="{{ URL::to('users/' . $user->id . '/edit') }}">Edit this User</a>
<div class="">
    <h2>{{ $user->username }}</h2>
    <p>
        <strong>Email:</strong> {{ $user->email }}<br>
        <strong>Level:</strong> {{ $user->role_id }}
    </p>
</div>
