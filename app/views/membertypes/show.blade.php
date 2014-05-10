<h1>Showing {{ $membertype->name }}</h1>
<a class="btn btn-small btn-info" href="{{ URL::to('membertypes/' . $membertype->id . '/edit') }}">Edit this MemberType</a>

<div class="">
    <h2>{{ $membertype->name }}</h2>
    <p>
        <strong>Description:</strong> {{ $membertype->description }}<br>
        <strong>Cost:</strong> {{ $membertype->cost }}
    </p>
</div>
