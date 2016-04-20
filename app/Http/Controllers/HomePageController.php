<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;


class HomePageController extends Controller
{
	public function showHomePage(){

		return view('home');


	}
}
