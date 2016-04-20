<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;


class SignUpController extends Controller
{
    public function SignUpPage(){

		return view('auth.register');


	}  
}
