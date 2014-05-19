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
        $basket = Cart::totalItems(true);

        $this->layout->title = 'Cart | H Manager';
        $this->layout->main = View::make('pages.cart')->with(array('cart' => $cart, 'basket' => $basket));
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
        // validate
        $rules = array(
            'total_guests' => 'required|numeric',
            'arrival_date' => 'date',
            'nights_stay' => 'numeric'
        );

        $validator = Validator::make(Input::all(), $rules);

        //process the login
        if ($validator->fails()) {
            return Redirect::to('/')
                            ->withErrors($validator)
                            ->withInput(Input::all());
        } else {

            $product = Product::find(Input::get('hostel_id'));
            $items = array(
                'id' => $product->id,
                'name' => $product->name,
                'price' => Input::get('price'),
                'quantity' => Input::get('nights_stay'),
                'options' => array(
                    'arrival_date' => Input::get('arrival_date'),
                    'total_guests' => Input::get('total_guests'),
                )
            );

            // Make the insert...
            Cart::insert($items);

            // Redirect
            Session::flash('message', 'Successfully added item to cart');
            return Redirect::to('cart');
        }
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
        // validate
        $rules = array(
            'total_guests' => 'numeric',
            'arrival_date' => 'date',
            'snr_male_guests' => 'numeric',
            'snr_female_guests' => 'numeric',
            'jr_male_guests' => 'numeric',
            'jr_female_guests' => 'numeric',
        );

        $validator = Validator::make(Input::all(), $rules);

//process the login
        if ($validator->fails()) {
            return Redirect::to('cart')
                            ->withErrors($validator)
                            ->withInput(Input::all());
        } else {
            // Make the insert...
            //foreach (Cart::contents() as $item) {
            $item = Cart::item($id);
            $item->quantity = Input::get('quantity');
            //}
            // Redirect
            Session::flash('message', 'Successfully updated cart');
            return Redirect::to('cart');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $item = Cart::item($id);
        $item->remove();

        // redirect
        Session::flash('message', 'Successfully deleted item');
        return Redirect::to('cart');
    }

    public function getRemoveItem($identifier) {
        
    }

}
