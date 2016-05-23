<?php

namespace App\Http\Controllers;

use App\custom_emberships;
use App\roomReservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;

class confirm extends Controller
{
    //

    public function room_con($id){

        $v=roomReservation::find($id);
        $v->confirm=true;
        $v->save();
        notify()->flash('Done', 'success', [
            'text' => 'Reservation Confirmed!',
            'type'=>'success'
        ]);
        return Redirect::back();

}

    public function room_uncon($id){

        $v=roomReservation::find($id);
        $v->confirm=false;
        $v->save();
        notify()->flash('Done', 'success', [
            'text' => 'Reservation Unconfirmed!',
            'type'=>'success'
        ]);
        return Redirect::back();

    }
    public function room_conView(Request $req){


        if(!(Session::has('user') && Session::has('pass') && $req->session()->get('pass')!=""&& $req->session()->get('user')!="")){

            return redirect('/admin');


        }
        else
            return view('view_confirmed');

    }




    public function mem_con($id){


        $v=custom_emberships::find($id);
        $v->confirm=true;
        $v->save();

        notify()->flash('Done', 'success', [
            'text' => 'Reservation Confirmed!',
            'type'=>'success'
        ]);
        return Redirect::back();


    }

    public function mem_uncon($id){


        $v=custom_emberships::find($id);
        $v->confirm=false;
        $v->save();

        notify()->flash('Done', 'success', [
            'text' => 'Reservation Confirmed!',
            'type'=>'success'
        ]);
        return Redirect::back();


    }

    public function mem_confView(Request $req){


        if(!(Session::has('user') && Session::has('pass') && $req->session()->get('pass')!=""&& $req->session()->get('user')!="")){

            return redirect('/admin');


        }
        else

            return view('view_cust_req');




    }



}
