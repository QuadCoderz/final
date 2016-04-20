<?php

namespace App\Http\Controllers;

use Auth;
use View;

use App\Http\Requests;
use App\membership;
class addMembershipController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function check(){


        $ret=membership::where('user_id','=',Auth::user()->email)->first();//to be modified
        if($ret==null){
            return true;
        }
        else
            return false;
    }



    public function premium(){
        if($this->check()) {

            $mem = new membership();
            $mem->user_id = Auth::user()->email;
            $mem->basic_membership = false;
            $mem->permium_membership = true;
            $mem->pro_membership = false;
            $mem->platinum_membership = false;
            $mem->custom_membership = false;
            $mem->save();

            return redirect('home');
            }
        else{
            echo 'registered';
        }
    }
    public function pro()
    {

        if ($this->check()) {


            $mem = new membership();
            $mem->user_id = Auth::user()->email;
            $mem->basic_membership = false;
            $mem->permium_membership = false;
            $mem->pro_membership = true;
            $mem->platinum_membership = false;
            $mem->custom_membership = false;
            $mem->save();
            return redirect('home');
        } else {
            echo 'registered';
        }
    }


    public function basic()
    {


        if ($this->check()) {

            $mem = new membership();
            $mem->user_id = Auth::user()->email;
            $mem->basic_membership = true;
            $mem->permium_membership = false;
            $mem->pro_membership = false;
            $mem->platinum_membership = false;
            $mem->custom_membership = false;
            $mem->save();
            return redirect('home');
        } else {
            echo 'registered';
        }
    }


    public function platinum(){

        if($this->check()) {

            $mem = new membership();
            $mem->user_id = Auth::user()->email;
            $mem->basic_membership = false;
            $mem->permium_membership = false;
            $mem->pro_membership = false;
            $mem->platinum_membership = true;
            $mem->custom_membership = false;
            $mem->save();
            return redirect('home');
        }

        else{
            echo 'registered';
        }

}
    public function custom(){

        if($this->check()) {
            $mem = new membership();
            $mem->user_id = Auth::user()->email;;
            $mem->basic_membership = false;
            $mem->permium_membership = false;
            $mem->pro_membership = false;
            $mem->platinum_membership = false;
            $mem->custom_membership = true;
            $mem->save();

            return redirect('home');
        }
        else{
            echo 'registered';
        }

  }



}
