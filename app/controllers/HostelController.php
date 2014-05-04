<?php

class HostelController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        // get all hostels
        $hostels = Hostel::all();

        // load view nd pass hostels
        return View::make('hostels.index')->with('hostels', $hostels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        // load crete form
        return View::make('hostels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        // validate
        $rules = array(
            'name' => 'required',
            'address_line_1' => 'required',
            'address_town_city' => 'required',
            'address_state_county' => 'required|numeric',
            'email' => 'required|email',
            'open_from' => 'required',
            'open_to' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        //process the login
        if ($validator->fails()) {
            return Redirect::to('hostels/create')
                            ->withErrors($validator)
                            ->withInput(Input::all());
        } else {
            $hostel = new Hostel;
            $hostel->name = Input::get('name');
            $hostel->address_line_1 = Input::get('address_line_1');
            $hostel->address_line_2 = Input::get('address_line_2');
            $hostel->address_town_city = Input::get('address_town_city');
            $hostel->address_state_county = Input::get('address_state_county');
            $hostel->latitude = Input::get('latitude');
            $hostel->longitude = Input::get('longitude');
            $hostel->email = Input::get('email');
            $hostel->phone = Input::get('phone');
            $hostel->website = Input::get('website');
            $hostel->description = Input::get('description');
            $hostel->photo = Input::get('photo');
            $hostel->open_from = Input::get('open_from');
            $hostel->open_to = Input::get('open_to');
            $hostel->save();

            // Redirect
            Session::flash('message', 'Successfully created hostel');
            return Redirect::to('hostels');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        // get hostel
        $hostel = Hostel::find($id);

        // show view and pass hostel
        return View::make('hostels.show')
                        ->with('hostel', $hostel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        // get hostel
        $hostel = Hostel::find($id);

        // show view and pass hostel
        return View::make('hostels.edit')
                        ->with('hostel', $hostel);
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
            'name' => 'required',
            'address_line_1' => 'required',
            'address_town_city' => 'required',
            'address_state_county' => 'required|numeric',
            'email' => 'required|email',
            'open_from' => 'required',
            'open_to' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('hostels/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::all());
        } else {
            // store
            $hostel = Hostel::find($id);
            $hostel->name = Input::get('name');
            $hostel->address_line_1 = Input::get('address_line_1');
            $hostel->address_line_2 = Input::get('address_line_2');
            $hostel->address_town_city = Input::get('address_town_city');
            $hostel->address_state_county = Input::get('address_state_county');
            $hostel->latitude = Input::get('latitude');
            $hostel->longitude = Input::get('longitude');
            $hostel->email = Input::get('email');
            $hostel->phone = Input::get('phone');
            $hostel->website = Input::get('website');
            $hostel->description = Input::get('description');
            $hostel->photo = Input::get('photo');
            $hostel->open_from = Input::get('open_from');
            $hostel->open_to = Input::get('open_to');
            $hostel->save();

            // redirect
            Session::flash('message', 'Successfully updated hostel');
            return Redirect::to('hostels');
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
        $hostel = Hostel::find($id);
        $hostel->delete();

        // redirect
        Session::flash('message', 'Successfully deleted hostel');
        return Redirect::to('hostels');
    }

}
