<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Auth;

use Illuminate\Http\Request;


class SignUpController extends Controller
{
    public function SignUpPage(){

    	if (Auth::guest()){
		return view('SignUp');
		}
		 return view('home');
	}  
}
