<?php

class BookingController extends \BaseController {

    public function __construct() {
        $this->beforeFilter('auth');
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $bookings = Booking::paginate(20);

        $this->layout->title = 'Bookings | H Manager';
        $this->layout->main = View::make('bookings.index')->with('bookings', $bookings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $countries = Country::lists('name', 'id');
        $membertypes = MemberType::lists('name', 'id');
        $this->layout->title = 'Create Booking | H Manager';
        $this->layout->main = View::make('bookings.create')->with(array('countries' => $countries, 'membertypes' => $membertypes));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        // validate
        $rules = array(
            'order_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'date_of_birth' => 'date',
            'address_line_1' => 'required',
            'town_city' => 'required',
            'state_county' => 'required',
            'country_id' => 'required|numeric',
            'phone_1' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        //process the login
        if ($validator->fails()) {
            return Redirect::to('bookings/create')
                            ->withErrors($validator)
                            ->withInput(Input::all());
        } else {
            $booking = new Booking();
            $booking->order_id = Input::get('order_id');
            $booking->booking_date = Input::get('booking_date');
            $booking->first_name = Input::get('first_name');
            $booking->last_name = Input::get('last_name');
            $booking->email = Input::get('email');
            $booking->date_of_birth = Input::get('date_of_birth');
            $booking->address_line_1 = Input::get('address_line_1');
            $booking->address_line_2 = Input::get('address_line_2');
            $booking->town_city = Input::get('town_city');
            $booking->state_county = Input::get('state_county');
            $booking->country_id = Input::get('country_id');
            $booking->post_code = Input::get('post_code');
            $booking->phone_1 = Input::get('phone_1');
            $booking->phone_2 = Input::get('phone_2');
            $booking->member = Input::get('member');
            $booking->membership_number = Input::get('membership_number');
            $booking->member_signup = Input::get('member_signup');
            $booking->member_type = Input::get('member_type');
            $booking->comments = Input::get('comments');
            $booking->requests = Input::get('requests');
            $booking->comments = Input::get('requests');
            $booking->status = 0;
            $booking->who_added = 'admin';
            $booking->source = 'website';
            $booking->save();

            // Redirect
            Session::flash('message', 'Successfully created booking');
            return Redirect::to('bookings');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        // get booking
        $booking = Booking::find($id);

        // show view and pass booking
        $this->layout->title = 'Show Booking | H Manager';
        $this->layout->main = View::make('bookings.show')
                ->with(array('booking' => $booking));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        // get booking
        $booking = Booking::find($id);
        $countries = Country::lists('name', 'id');
        $membertypes = MemberType::lists('name', 'id');
        // show view and pass booking
        $this->layout->title = 'Edit Booking | H Manager';
        $this->layout->main = View::make('bookings.edit')
                ->with(array('booking' => $booking, 'countries' => $countries, 'membertypes' => $membertypes));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        // validate
        $rules = array(
            'order_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'date_of_birth' => 'date',
            'address_line_1' => 'required',
            'town_city' => 'required',
            'state_county' => 'required',
            'country_id' => 'required|numeric',
            'phone_1' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('bookings/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::all());
        } else {
            // store
            $booking = Booking::find($id);
            $booking->order_id = Input::get('order_id');
            $booking->booking_date = Input::get('booking_date');
            $booking->first_name = Input::get('first_name');
            $booking->last_name = Input::get('last_name');
            $booking->email = Input::get('email');
            $booking->date_of_birth = Input::get('date_of_birth');
            $booking->address_line_1 = Input::get('address_line_1');
            $booking->address_line_2 = Input::get('address_line_2');
            $booking->town_city = Input::get('town_city');
            $booking->state_county = Input::get('state_county');
            $booking->country_id = Input::get('country_id');
            $booking->post_code = Input::get('post_code');
            $booking->phone_1 = Input::get('phone_1');
            $booking->phone_2 = Input::get('phone_2');
            $booking->member = Input::get('member');
            $booking->membership_number = Input::get('membership_number');
            $booking->member_signup = Input::get('member_signup');
            $booking->member_type = Input::get('member_type');
            $booking->comments = Input::get('comments');
            $booking->requests = Input::get('requests');
            $booking->comments = Input::get('requests');
            $booking->status = Input::get('status');
            $booking->who_added = Input::get('who_added');
            $booking->source = Input::get('source');
            $booking->save();

            // redirect
            Session::flash('message', 'Successfully updated booking');
            return Redirect::to('bookings');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        // delete
        $booking = Booking::find($id);
        $booking->delete();

        // redirect
        Session::flash('message', 'Successfully deleted booking');
        return Redirect::to('bookings');
    }

}
