<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class show_event_res extends Controller
{
    //

    public function setId($id){

        session(['res'=>$id]);

        return redirect('/view_regesterations');
    }

    public function view(Request $req)
    {
        if (Session::has('user') && Session::has('pass') && $req->session()->get('pass')!=""&& $req->session()->get('user')!="")
            return view('show_event_res');

        else
            return view('sign');
    }



}
