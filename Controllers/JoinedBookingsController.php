<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\JoinedBooking;
use Auth;
class JoinedBookingsController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

    public function store(Request $request) {
        $this->validate($request,[
            'bookingid'=>'required',
            'seats'=>'required']);
	 $booking = new JoinedBooking($request->all());
	 $booking->userid = Auth::id();
	 $booking->save();
    }
    public function index() {
    	return JoinedBooking::all();
    }
    public function create() {
        return 'Not applicable';
     //    $bookings = Booking::all();
    	// return view('bookings/index', compact('bookings'));
    }
    public function update(Request $request) {
    	DB::table('cities')
            ->where('id', $request->id)
            ->update(['bookingid' => $request->bookingid,
                'userid'=> $request->userid,
                'seats'=> $request->seats]);
    }
    public function show(JoinedBooking $joinedbookings) {
    	return $joinedbookings;
    }
    public function destroy() {
    	return 'Not applicable';
    }
    public function edit() {
    	return 'not applicable';
    }
}
