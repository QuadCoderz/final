<?php

namespace App\Http\Controllers;

use App\roomReservation;

use App\Http\Requests;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RoomReservationController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}


	public function RoomReservationPage()
	{

		return view('RoomReservation');

	}

	public function add(Request $request)
	{

		if (check($request)) {

			$new_res = roomReservation::getInstance();
			$new_res->starting_date = $request->stdate;
			$new_res->ending_date = $request->enddate;
			$new_res->starting_time = $request->Ftime;
			$new_res->ending_time = $request->Ttime;
			$new_res->people_num = $request->peopleNo;
			$new_res->projector = $request->proj;

			$new_res->save();

		} else
			echo 'error';

		return redirect('home');


	}

	public function check(Request $req)
	{

		if (!(($req->stdate > $req->enddate) || ($req->Ftime > $req->Ttime) || ($req->peopleNo < 0))) {

			return true;

		} else
			return false;


	}

}