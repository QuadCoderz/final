<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;

class RoomReservationController extends Controller
{
	

	public function RoomReservationPage(){
		return view('RoomReservation');

	}
}