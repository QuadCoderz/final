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
      notify()->flash('Done', 'success', [
        'text' => 'You have registered suuccessfully !',
        'type'=>'success'
        ]);
      return redirect('home');
    } else {
      notify()->flash('sorry !','success',[
        'text' => 'You are registered',
        ]);
      return redirect('home');
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

