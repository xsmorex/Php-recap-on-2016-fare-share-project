<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Payment;
use Auth;
class PaymentsController extends Controller
{
	public function __construct() {
		$this->middleware('admin');
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
    	return Payment::all();
    }
    public function create() {
     //    $bookings = Booking::all();
    	// return view('bookings/index', compact('bookings'));
    }
    public function update() {
    	
    }
    public function show(Payment $payments) {
    	return $payments;
    }
    public function destroy() {
    	return 'Not applicable';
    }
    public function edit() {
    	return 'Not applicable';
    }
}
