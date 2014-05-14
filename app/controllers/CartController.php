<?php

class CartController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
        $cart = Cart::contents();

        $this->layout->title = 'Cart | H Manager';
        $this->layout->main = View::make('pages.cart')->with('cart', $cart);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
        // validate
        /* $rules = array(
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
          } else { */
        $items = array(
            'id' => Input::get('hostel_id'),
            'name' => Input::get('name'),
            'price' => Input::get('price'),
            'quantity' => Input::get('nights_stay'),
            'options' => array(
                'arrival_date' => Input::get('arrival_date'),
                'nights_stay' => Input::get('nights_stay'),
                'total_guests' => Input::get('total_guests'),
                'snr_male_guests' => Input::get('snr_male_guests'),
                'snr_female_guests' => Input::get('snr_female_guests'),
                'jr_male_guests' => Input::get('jr_male_guests'),
                'jr_female_guests' => Input::get('jr_female_guests'),
            )
        );
        // Make the insert...
        Cart::insert($items);

        // Redirect
        Session::flash('message', 'Successfully added item to cart');
        return Redirect::to('cart');
        /* } */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
