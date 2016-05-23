<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use View;


class EventsController extends Controller
{


	public function thispage(Request $req){

		if(Session::has('id')) {
			$value = $req->session()->get('id');
			return view('Events')->with('id',$value);
		}

	}



    public function EventsPage($id){

		session(['id'=>$id]);
		return redirect ('Events');

	}

}
