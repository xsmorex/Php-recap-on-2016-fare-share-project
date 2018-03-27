<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use DB;

class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function showBookings($user) 
    {
    	$user = Auth::user();
    	$dbresults = DB::table('bookings')->where('bookings.id', '=', $user->id)
        ->join('users', function ($join) {
            $join->on('bookings.userid', '=', 'users.id');
        })->get();
        return $dbresults;
;
    }
}
