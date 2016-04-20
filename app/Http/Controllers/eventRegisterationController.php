<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\eventRegisteration;
use App\Http\Requests;

class eventRegisterationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function add($id)
    {

        if ($this->check($id)) {
            $reg = new eventRegisteration();
            $reg->event_id = $id;
            $reg->user_id = Auth::user()->email;
            $reg->save();
            return redirect('home');
        } else {
            echo 'enta msgl ya 5wl , enta fakrny msh h2fshk ya ro7 omk';
        }
    }

    public function check($id)
    {

        $ret = eventRegisteration::where('event_id', '=', $id)->where('user_id', '=', Auth::user()->email)->first();//to be modified
        if ($ret == null) {
            return true;
        } else
            return false;

    }
}