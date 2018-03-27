<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Booking;
use App\City;
use App\User;
use App\Pickup;
use App\Payment;
use App\JoinedBooking;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/adminPanel');
    }


    //Most basic getter functions that return all. They however provide a very clean way of retrieving all data for staff. More generalized ones coming soon.
    public function getUsers() {
        return User::all();
    }

    public function getBookings() {
        return Booking::all();
    }

    public function getPayments() {
        return Payment::all();
    }

    public function getJoinedBookings() {
        return JoinedBooking::all();
    }

    public function getCities() {
        return City::all();
    }

    public function getPickups() {
        return Pickup::all();
    }

    
    //Deleter functions
    public function deleteUser() {
        return 'Function In Progress';
    }

    public function deleteBooking() {
        return 'Function In Progress';   
    }

    public function deletePayment() {
        return 'Function In Progress';   
    }

    public function deleteJoinedBookings() {
        return 'Function In Progress';   
    }

    public function deleteCities() {
        return 'Function In Progress';   
    }

    public function deletePickups() {
        return 'Function in Progress';
    }
}
