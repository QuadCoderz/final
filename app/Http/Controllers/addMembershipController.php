<?php

namespace App\Http\Controllers;

use App\custom_emberships;
use Auth;
use Illuminate\Http\Request;
use View;

use App\Http\Requests;
use App\membership;
class addMembershipController extends Controller
{
    //

    var $type;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function check(){


        $ret=membership::where('user_id','=',Auth::user()->email)->first();//to be modified
        if($ret==null){
            return true;
        }
        else {

            $this->type=$ret->type;

            return false;
        }
    }





public function basic($id,Request $request)
{


    if ($this->check()) {

        $mem = new membership();
        $mem->user_id = Auth::user()->email;
        if($id==1) {
            $mem->type = "Basic";
            $mem->save();
            notify()->flash('Done', 'success', [
                'text' => 'You have registered in Basic Membership !',
                'type'=>'success'
            ]);
        }
        if($id==2) {
            $mem->type = "Premium";
            $mem->save();
            notify()->flash('Done', 'success', [
                'text' => 'You have registered in premium membership !',
                'type'=>'success'
            ]);
        }
        if($id==3) {
            $mem->type = "Pro";
            $mem->save();
            notify()->flash('Done', 'success', [
                'text' => 'You have registered in Pro !',
                'type'=>'success'
            ]);
        }
        if($id==4) {
            $mem->type = "Platinum";
            $mem->save();
            notify()->flash('Done', 'success', [
                'text' => 'You have registered in Platinum !',
                'type'=>'success'
            ]);
        }
        if($id==5) {
            $mem->type = "custom";
            $mem->save();
            $custom=new custom_emberships();
            $custom->membership_id=$mem->id;
            $f2=$request->feature_2;
            $f1=$request->feature_1;
            $f3=$request->feature_3;
            $f4=$request->feature_4;

            if($request->feature_1==null){
                $f1="none";
            }
            if($request->feature_2==null){
                $f2="none";
            } if($request->feature_3==null){
                $f3="none";
            } if($request->feature_4==null){
                $f4="none";
            }
            $custom->feature_1=$f1;
            $custom->feature_2=$f2;
            $custom->feature_3=$f3;
            $custom->feature_4=$f4;
            $custom->save();

            notify()->flash('Done', 'success', [
                'text' => 'You have registered in custom !',
                'type'=>'success'
            ]);
        }

    }
    else {
        if($id==1) {
            notify()->flash('Sorry!', 'success', [
                'text' => "You are already in $this->type "]);
        }
        if($id==2) {
            notify()->flash('Sorry!', 'success', [
                'text' => "You are already in $this->type "]);
        }
        if($id==3) {
            notify()->flash('Sorry!', 'success', [
                'text' => "You are already in $this->type "]);
        }
        if($id==4) {
            notify()->flash('Sorry!', 'success', [
                'text' => "You are already in $this->type "]);
        }
        if($id==5) {
            notify()->flash('Sorry!', 'success', [
                'text' => "You are already in $this->type "]);
        }

 }

 return redirect('home');

}


}
