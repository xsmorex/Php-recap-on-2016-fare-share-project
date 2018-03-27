@extends('layouts/app')

@section('content')
	<h1> All Bookings </h1>
	<ul class="list-group">
		@foreach ($bookings as $booking)
			<div>
			<li class="list-group-item">{{ $booking->userid }} {{ $booking->pickup }} {{ $booking->dropoff }} {{$booking->totalSeats}}
			{{$booking->departure}} {{$booking->arrival}}</li>
			</div>
		@endforeach
	</ul>

	<h3>Add a new booking</h3>
	<form method="POST" action="/bookings">
		{{ csrf_field() }}
		<div calss="form-group">
			<textarea name="pickup" class="form-control"></textarea>
		</div>
		<div calss="form-group">
			<textarea name="dropoff" class="form-control"></textarea>
		</div>
		<div calss="form-group">
			<textarea name="totalSeats" class="form-control"></textarea>
		</div>
		<div calss="form-group">
			<textarea name="departure" class="form-control"></textarea>
		</div>
		<div calss="form-group">
			<textarea name="arrival" class="form-control"></textarea>
		</div>
		<div calss="form-group">
			<button type="submit" class="btn btn-primary">Add Booking</button>
		</div>
	</form>
@stop