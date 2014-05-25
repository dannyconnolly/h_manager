<div class="page-header">
    <h1 class="">{{ $user->username }}</h1>
    <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $user->id . '/edit') }}">Edit</a>
</div>

<div class="col-md-12">
    @include('partials.notifications')

    <p>
        <strong>Username:</strong> {{ $user->username }}<br>
        <strong>Email:</strong> {{ $user->email }}<br>
        <strong>Level:</strong> {{ $user->role_id }}
    </p>
</div>
