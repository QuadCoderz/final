<?php

namespace App\Http\Controllers;
use App\custom_emberships;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\membership;
use App\usersData;

class view_membership extends Controller
{

     public function prep(Request $req){

         if(Session::has('mem_id')) {

             $mem = membership::find($req->session()->get('mem_id'));
             if ($mem->type == "custom") {


                 $client = $mem->user_id;
                 $ret = usersData::where('email', '=', $client)->first();//to be modified
                 $m=custom_emberships::where('membership_id','=',$req->session()->get('mem_id'))->first();
                 $f1=$m->feature_1;$f2=$m->feature_2;$f3=$m->feature_3;$f4=$m->feature_4;
                 if($m->feature_1 != "free_access"){
                     $f1="None";
                 }
                 if($m->feature_2 != "unlimited_hours"){
                     $f2="None";
                 }
                 if($m->feature_3 != "workshops_discount"){
                     $f3="None";
                 }
                 if($m->feature_4 != "free_events"){
                     $f4="None";
                 }
                 $arr = array("cname" => $ret->name, "mobile" => $ret->mobile,
                     "email" => $ret->email, "type" => $mem->type, "date" => $mem->created_at,"f1"=>$f1,"f2"=>$f2,"f3"=>$f3,"f4"=>$f4);
                 return view('view_membership', $arr);

             } else {
                 $client = $mem->user_id;
                 $ret = usersData::where('email', '=', $client)->first();//to be modified

                 $arr = array("cname" => $ret->name, "mobile" => $ret->mobile, "email" => $ret->email, "type" => $mem->type, "date" => $mem->created_at);
                 return view('view_membership', $arr);
             }

         }
     }

    public function setId($id){

        session(['mem_id'=>$id]);

        return redirect('/view_membership');
    }


}
