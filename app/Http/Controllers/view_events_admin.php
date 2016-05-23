<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\adminMainController;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;

class view_events_admin extends Controller
{
    //



    public function thisPage(Request $req)
    {

        if(!(Session::has('user') && Session::has('pass') && $req->session()->get('pass')!=""&& $req->session()->get('user')!="")){

            return redirect('/admin');


        }
        else

            return view('view_events_admin');



    }
}