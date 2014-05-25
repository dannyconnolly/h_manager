<div class="page-header">
    <h1>Cart</h1>
</div>
<div class="col-md-12">

    @include('partials.notifications')

    @if ($basket == 0)
    <p>There are currently no items in your cart</p>
    @else
    {{ Form::open(array('route' => 'checkout', 'method' => 'post')) }}
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Hostel</th>
                <th>No. Nights</th>
                <th>Cost Per Night</th>
                <th>No. Guests</th>
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
                    {{ Form::html5_field('number', 'quantity', $value->quantity, array('class' => 'form-control', 'min' => '1', 'max' => '20')) }}
                </td>
                <td>
                    &euro;{{ number_format($value->price, 2) }}
                </td>
                <td>
                    @if ($value->hasOptions())
                    {{ Form::html5_field('number', 'total_guests', $value->options['total_guests'], array('class' => 'form-control', 'min' => '1', 'max' => '20')) }}
                    @endif
                </td>
                <td>
                    &euro;{{ $subtotal = $value->options['total_guests'] * number_format($value->total(),2) }}
                </td>
                <td>
                    <!-- delete the user (uses the destroy method DESTROY /users/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4"></td>
                <td colspan="2">
                    <strong>Total:</strong> &euro; {{ number_format(Cart::Total(), 2) }}
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <a class="btn btn-small btn-success" href="{{ URL::to('/') }}">View more hostels</a>                    
                </td>
                <td colspan="2">
                    {{ Form::submit('Update Cart', array('class' => 'btn btn-info', 'name' => 'update_cart')) }}
                    {{ Form::submit('Proceed to checkout', array('class' => 'btn btn-success', 'name' => 'checkout')) }}
                </td>
            </tr>
        </tbody>
    </table>
    {{ Form::close() }}
    @endif
</div>