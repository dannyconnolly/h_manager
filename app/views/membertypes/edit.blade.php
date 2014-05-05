<h1>Edit {{ $membertype->name }}</h1>

<!-- if there are creation errors, they will show here -->
@if ( $errors->count() > 0 )
<div class="alert alert-danger">
    {{ HTML::ul($errors->all()) }}
</div>
@endif

{{ Form::model($membertype, array('route' => array('membertypes.update', $membertype->id), 'method' => 'PUT')) }}

<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('cost', 'Cost') }}
    {{ Form::text('cost', null, array('class' => 'form-control')) }}
</div>

{{ Form::submit('Edit the MemberType!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
