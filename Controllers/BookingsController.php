<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Booking;
use Auth;
class BookingsController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

    public function store(Request $request) {
        $this->validate($request,[
            'pickup'=>'required',
            'dropoff'=>'required',
            'totalSeats'=>'required',
            'departure'=>'required',
            'arrival'=>'required',
        ]);
    	$booking = new Booking($request->all());
    	$booking->userid = Auth::id();
    	$booking->save();
    }
    public function index() {
    	return Booking::all();
    }
    public function create() {
        $bookings = Booking::all();
    	return view('bookings/index', compact('bookings'));
    }
    public function update(Request $request) {
    	DB::table('bookings')
            ->where('id', $request->id)
            ->update(['userid' => $request->userid,
            'pickup'=>$request->pickup,
            'dropoff'=>$request->dropoff,
            'totalSeats'=>$request->totalSeats,
            'departure'=>$request->departure,
            'arrival'=>$request->arrival]);
    }
    public function show(Booking $bookings) {
    	return $bookings;
    }
    public function destroy(Booking $bookings) {
    	$bookings->cancalled = true;
        return $bookings->save();
    }
    public function edit() {
    	return 'Function not meant to be implemented.';
    }
}
