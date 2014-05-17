<div class="col-md-10">
    <h1>Cart</h1>
</div>
<div class="col-md-2">

</div>
<div class="col-md-12">

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    @if ($basket == 0)
    <p>There are currently no items in your cart</p>
    @else
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Hostel</th>
                <th>No. Nights</th>
                <th>Cost Per Night</th>
                <th>No. Guests</th>
                <th>Snr Males</th>
                <th>Snr Females</th>
                <th>Jr Males</th>
                <th>Jr Females</th>
                <th>Subtotal</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($cart as $value)
            <tr>
                <td>
                    {{ $value->name }}
                </td>
                <td>
                    {{ $value->quantity }}
                </td>
                <td>
                    &euro;{{ $value->price }}
                </td>
                <td>
                    @if ($value->hasOptions())
                    {{ $value->options['total_guests'] }}
                    @endif
                </td>
                <td>
                    @if ($value->hasOptions()) 
                    {{ $value->options['snr_male_guests'] }}
                    @endif
                </td>
                <td>
                    @if ($value->hasOptions()) 
                    {{ $value->options['snr_female_guests'] }}
                    @endif
                </td>
                <td>
                    @if ($value->hasOptions()) 
                    {{ $value->options['jr_male_guests'] }}
                    @endif
                </td>
                <td>
                    @if ($value->hasOptions()) 
                    {{ $value->options['jr_female_guests'] }}
                    @endif
                </td>
                <td>
                    &euro;{{ $value->subtotal }}
                </td>
                <td>
                    <!-- delete the user (uses the destroy method DESTROY /users/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(array('url' => 'cart/' . $value->identifier, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="8">
                    <a class="btn btn-small btn-success" href="{{ URL::to('/') }}">View more hostels</a>                    
                </td>
                <td colspan="2">
                    <a class="btn btn-small btn-success" href="{{ URL::to('/') }}">Proceed to checkout</a>
                </td>
            </tr>
        </tbody>
    </table>
    @endif
</div>