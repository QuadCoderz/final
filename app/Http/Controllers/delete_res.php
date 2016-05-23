<?php

namespace App\Http\Controllers;

use App\eventRegisteration;
use Illuminate\Http\Request;

use App\Http\Requests;

class delete_res extends Controller
{
    //

    public function del($id){




        $reg = eventRegisteration::find($id);

        $reg->delete();


        notify()->flash('Done', 'success', [
            'text' => 'Registeration deleted!',
            'type'=>'success'
        ]);

        return redirect('view_events');


    }

}
