<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;


class SignInController extends Controller
{
    public function SignInPage(){

		
		return view('auth.login');

	} 

}

