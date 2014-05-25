<div class="page-header">
    <h1>Showing  #{{ $bookingitem->order_id }}</h1>
    <a class="btn btn-small btn-info" href="{{ URL::to('bookingitems/' . $bookingitem->id . '/edit') }}">Edit</a>
</div>

<div class="col-md-7 view"><th>booking_id</th>

    <p><strong>booking_id:</strong> {{ $bookingitem->booking_id }}</p>
    <p><strong>hostel_id:</strong> {{ $bookingitem->hostel_id }}</p>
    <p><strong>arrival_date:</strong> {{ $bookingitem->arrival_date }}</p>
    <p><strong>nights_stay:</strong> {{ $bookingitem->nights_stay }}</p>
    <p><strong>total_guests:</strong> {{ $bookingitem->total_guests }}</p>
    <p><strong>snr_male_guests:</strong> {{ $bookingitem->snr_male_guests }}</p>
    <p><strong>snr_female_guests:</strong> {{ $bookingitem->snr_female_guests }}</p>
    <p><strong>jr_male_guests:</strong> {{ $bookingitem->jr_male_guests }}</p>
    <p><strong>jr_female_guests:</strong> {{ $bookingitem->jr_female_guests }}</p>
</div>
