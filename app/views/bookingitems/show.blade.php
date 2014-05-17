<div class="col-md-10">
    <h1>Showing  #{{ $bookingitem->order_id }}</h1>
</div>
<div class="col-md-2">
    <a class="btn btn-small btn-info" href="{{ URL::to('bookingitems/' . $bookingitem->id . '/edit') }}">Edit</a>
</div>

<div class="col-md-12"><th>booking_id</th>
    <th>hostel_id</th>
    <th>arrival_date</th>
    <th>nights_stay</th>
    <th>total_guests</th>
    <th>snr_male_guests</th>
    <th>snr_female_guests</th>
    <th>jr_male_guests</th>
    <th>jr_female_guests</th>
    <p>
        <strong>booking_id:</strong> {{ $bookingitem->booking_id }}<br>
        <strong>hostel_id:</strong> {{ $bookingitem->hostel_id }}<br>
        <strong>arrival_date:</strong> {{ $bookingitem->arrival_date }}<br>
        <strong>nights_stay:</strong> {{ $bookingitem->nights_stay }}<br>
        <strong>total_guests:</strong> {{ $bookingitem->total_guests }}<br>
        <strong>snr_male_guests:</strong> {{ $bookingitem->snr_male_guests }}<br>
        <strong>snr_female_guests:</strong> {{ $bookingitem->snr_female_guests }}<br>
        <strong>jr_male_guests:</strong> {{ $bookingitem->jr_male_guests }}<br>
        <strong>jr_female_guests:</strong> {{ $bookingitem->jr_female_guests }}
    </p>
</div>
