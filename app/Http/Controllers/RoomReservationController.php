<?php

namespace App\Http\Controllers;

use App\roomReservation;
use Auth;
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
		
		
		if ($this->check($request)) {

			$new_res =new roomReservation();
			$new_res->starting_date = $request->sdate;
			$new_res->ending_date = $request->edate;
			$new_res->email=Auth::user()->email;
			$new_res->starting_time = $request->Ftime;
			$new_res->ending_time = $request->Ttime;
			$new_res->people_num = $request->peopleNo;
			$new_res->projector = $request->proj;

			$new_res->save();
			notify()->flash('Thank you'. Auth::user()->name,'success',[
				'text' => 'We will contact you soon',
				'type'=>'success']);

		} else
		echo 'error';

		return redirect('home');


	}

	public function check(Request $req)
	{

		if (!(($req->sdate > $req->edate) || ($req->Ftime > $req->Ttime) || ($req->peopleNo < 0))) {

			return true;

		} else
		return false;


	}

}