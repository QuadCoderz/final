<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class adminController extends Controller
{
    //
    public function adminPage(Request $req){

        if (Session::has('user') && Session::has('pass') && $req->session()->get('pass')!=""&& $req->session()->get('user')!="")
            return view('admin_view');

        else
            return view('sign');


    }

}
