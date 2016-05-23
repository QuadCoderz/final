<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\libraries\admin;
use Illuminate\Support\Facades\Redirect;

class adminMainController extends Controller
{


     var $inst;


    public function __construct()
    {
        $this->inst=admin::getInstance();
    }

    public function getData(Request $req){

        $u=$req->usern;
        $p=$req->pass;
        if($this->compare($u,$p)){

            session(['user'=>$u]);
            session(['pass'=>$p]);

            $req->session()->get('pass');
           return redirect('/admin');

        }

        else {
            session(['user'=>""]);
            session(['pass'=>""]);
            notify()->flash('fail', 'failed', [
                'text' => 'you entered something wrong!',
                'type'=>'success'
            ]);
            return redirect('/admin');
        }
    }

    public function compare($user,$pass){

        return $this->inst->check($user,$pass);

    }


    public function signOut(){

        session(['user'=>""]);
        session(['pass'=>""]);
        return redirect('/admin');


    }
}
