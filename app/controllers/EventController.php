<?php

class EventController extends \BaseController {

    public function __construct() {
        $this->beforeFilter('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        // get all events
        $events = Event::all();

        // load view nd pass events
        $this->layout->title = 'Events | H Manager';
        $this->layout->main = View::make('events.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        // load crete form
        $eventtypes = EventType::lists('name', 'id');
        $hostels = Hostel::lists('name', 'id');
        $this->layout->title = 'Create Event | H Manager';
        $this->layout->main = View::make('events.create')->with(array('hostels' => $hostels, 'eventtypes' => $eventtypes));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        // validate
        $rules = array(
            'title' => 'required',
            'type' => 'required|numeric',
            'hostel' => 'required|numeric',
            'county' => 'required|numeric',
            'date_from' => 'required',
            'date_to' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        //process the login
        if ($validator->fails()) {
            return Redirect::to('events/create')
                            ->withErrors($validator)
                            ->withInput(Input::all());
        } else {
            $event = new Event;
            $event->title = Input::get('title');
            $event->type = Input::get('type');
            $event->hostel = Input::get('hostel');
            $event->county = Input::get('county');
            $event->date_from = Input::get('date_from');
            $event->date_to = Input::get('date_to');
            $event->details = Input::get('details');
            $event->save();

            // Redirect
            Session::flash('message', 'Successfully created event');
            return Redirect::to('events');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        // get event
        $event = Event::find($id);

        // show view and pass event
        $this->layout->title = 'Show Event | H Manager';
        $this->layout->main = View::make('events.show')
                ->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        // get event
        $event = Event::find($id);

        // show view and pass event
        $this->layout->title = 'Edit Event | H Manager';
        $this->layout->main = View::make('events.edit')
                ->with('event', $event);
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
            'title' => 'required',
            'type' => 'required|numeric',
            'hostel' => 'required|numeric',
            'county' => 'required|numeric',
            'date_from' => 'required',
            'date_to' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('events/' . $id . '/edit')
                            ->withErrors($validator)
                            ->withInput(Input::all());
        } else {
            // store
            $event = Event::find($id);
            $event->title = Input::get('title');
            $event->type = Input::get('type');
            $event->hostel = Input::get('hostel');
            $event->county = Input::get('county');
            $event->date_from = Input::get('date_from');
            $event->date_to = Input::get('date_to');
            $event->details = Input::get('details');
            $event->save();

            // redirect
            Session::flash('message', 'Successfully updated event');
            return Redirect::to('events');
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
        $event = Event::find($id);
        $event->delete();

        // redirect
        Session::flash('message', 'Successfully deleted event');
        return Redirect::to('events');
    }

}
