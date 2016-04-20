<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;

class EventsController extends Controller
{




    public function EventsPage($eventId){

		$arr=['id'=>$eventId];
		return view('Events',$arr);

	}

	public function EventsBook(){
		return "You Sucessfully Booked!"; // make it show user name
	}
}
