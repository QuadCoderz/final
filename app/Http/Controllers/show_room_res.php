<?php

namespace App\Http\Controllers;

use App\roomReservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;

class show_room_res extends Controller
{
    //
    public function go(Request $req){

        if(!(Session::has('user') && Session::has('pass') && $req->session()->get('pass')!=""&& $req->session()->get('user')!="")){

            return redirect('/admin');


        }
        else
            return view('show_room_res');



    }

    public function setId($id){

        session(['room_res_id'=>$id]);

        return redirect('/show_room_res');
    }

    public function show(Request $req){


        if(!(Session::has('user') && Session::has('pass') && $req->session()->get('pass')!=""&& $req->session()->get('user')!="")){

            return redirect('/admin');


        }
        else
        return view('show_this_res');
    }

    public function del($id){


        $reg = roomReservation::find($id);

        $reg->delete();


        notify()->flash('Done', 'success', [
            'text' => 'Reservation deleted!',
            'type'=>'success'
        ]);

        return redirect('view_room_res');


    }
    public function del1($id){


        $reg = roomReservation::find($id);

        $reg->delete();


        notify()->flash('Done', 'success', [
            'text' => 'Reservation deleted!',
            'type'=>'success'
        ]);

        return redirect('confirm');


    }

}
