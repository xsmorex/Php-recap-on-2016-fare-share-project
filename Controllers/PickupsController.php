<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pickup;
use Auth;
use DB;
class PickupsController extends Controller
{
	public function __construct() {
		// $this->middleware('auth');
	}

    public function store(Request $request) {
     //    $this->validate($request,[
     //        'pickup'=>'required',
     //        'dropoff'=>'required',
     //        'totalSeats'=>'required',
     //        'departure'=>'required',
     //        'arrival'=>'required',
     //    ]);
	 // $booking = new Booking($request->all());
	 // $booking->userid = Auth::id();
	 // $booking->save();
    }
    public function index() {
    	return DB::table('pickups')
            ->join('cities', 'pickups.cityid', '=', 'cities.id')
            ->select('cities.city','pickups.*')
            ->get();
    }
    public function create() {
    	return 'Not meant to be implemented.';
     //    $bookings = Booking::all();
    	// return view('bookings/index', compact('bookings'));
    }
    public function update(Request $request) {
    	DB::table('pickups')
            ->where('id', $request->id)
            ->update(['cityid' => $request->city,
            	'pickupName'=>$request->pickupName,
            	'xAngle'=>$request->xAngle,
            	'yAngle'=>$request->yAngle]);
    }
    public function show(Pickup $pickups) {
    	return $pickups;
    }
    public function destroy() {
    	return 'Not applicable.';
    }
    public function edit() {
    	return 'Not applicable.';
    }

}
