<div class="col-md-10">
    <h1>Showing {{ $membertype->name }}</h1>
</div>
<div class="col-md-2">
    <a class="btn btn-small btn-info" href="{{ URL::to('membertypes/' . $membertype->id . '/edit') }}">Edit</a>
</div>

<div class="col-md-12">
    @include('partials.notifications')

    <p>
        <strong>Name:</strong> {{ $membertype->name }}<br>
        <strong>Description:</strong> {{ $membertype->description }}<br>
        <strong>Cost:</strong> {{ $membertype->cost }}
    </p>
</div>
