<div class="page-header">
    <h1>{{ $membertype->name }}</h1>
    <a class="btn btn-small btn-info" href="{{ URL::to('membertypes/' . $membertype->id . '/edit') }}">Edit</a>
</div>

<div class="col-md-7">
    @include('partials.notifications')

    <p>
        <strong>Name:</strong> {{ $membertype->name }}<br>
        <strong>Cost:</strong> {{ $membertype->cost }}<br>
        <strong>Description:</strong> {{ $membertype->description }}
    </p>
</div>
