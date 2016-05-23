<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;

class view_memberships_admin extends Controller
{
    //


    public function thisPage(Request $req){

        if(!(Session::has('user') && Session::has('pass') && $req->session()->get('pass')!=""&& $req->session()->get('user')!="")){

            return redirect('/admin');


        }
        else
            return view('view_memberships');


    }


}
