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

    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Product</th>
                <th>Qty</th>
                <th>Item Price</th>
                <th>Subtotal</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($cart as $value)

            <tr>
                <td>
                    <p><strong>{{ $value->name }}</strong></p>
                </td>
                <td><input type="text" value="{{ $value->quantity }}"></td>
                <td>${{ $value->price }}</td>
                <td>${{ $value->subtotal }}</td>
            </tr>

            @endforeach

        </tbody>
    </table>
</div>