<?php

namespace App\Http\Controllers;

use App\custom_emberships;
use Illuminate\Http\Request;
use App\membership;
use App\Http\Requests;

class delete_membership extends Controller
{
    //

    public function del($id){

        $mem = membership::find($id);

        if($mem->type=="custom"){

            $cust=custom_emberships::where('membership_id','=',$id);
            $cust->delete();
        }
        $mem->delete();


        notify()->flash('Done', 'success', [
            'text' => 'membership deleted!',
            'type'=>'success'
        ]);

        return redirect('view_memberships');


    }
}
