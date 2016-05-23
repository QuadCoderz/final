<?php

namespace App\Http\Controllers;

use App\eventRegisteration;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\events;

class deleteEvent extends Controller
{
    public function go($id){



        eventRegisteration::where('event_id','=',$id)->delete();
        events::find($id)->delete();
    //

        notify()->flash('Done', 'success', [
            'text' => 'event deleted!',
            'type'=>'success'
        ]);

        return redirect("view_events");
    }

}
