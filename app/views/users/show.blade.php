
<h1>Showing {{ $user->username }}</h1>

<div class="jumbotron text-center">
    <h2>{{ $user->username }}</h2>
    <p>
        <strong>Email:</strong> {{ $user->email }}<br>
        <strong>Level:</strong> {{ $user->role_id }}
    </p>
</div>
