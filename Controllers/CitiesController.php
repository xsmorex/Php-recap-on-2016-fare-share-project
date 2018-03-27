<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\City;
use Auth;
class CitiesController extends Controller
{
	public function __construct() {
		// $this->middleware('auth');
	}

    public function store(Request $request) {
        $this->validate($request,['city'=>'required']);
    	$city = new City($request->all());
    	$booking->save();
    }
    public function index() {
    	return City::all();
    }
    public function create(Request $request) {
        return 'Page not meant to be created';
    }
    public function update(Request $request) {
    	DB::table('cities')
            ->where('id', $request->id)
            ->update(['city' => $request->city]);
    }
    public function show(City $cities) {
    	return $cities;
    }
    public function destroy() {
    	return 'Not deletable right now.';
    }
    public function edit() {
    	return 'Function not meant to be implemented.';
    }
}
