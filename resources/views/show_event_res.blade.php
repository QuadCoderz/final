<?php
use App\events;use App\usersData;
use App\eventRegisteration;
use \Illuminate\Support\Facades\Session;

?>



@extends('layout')
@section('title')
    <title>Events</title>
@stop
@section('content')


    <div class="container" >
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Reservations</strong>
                </h2>
                <hr>
            </div>
        </div>

    </div>

    <div class="container" >
        <div class="row">

            <div class="table-responsive">
                <tbody>

                <?php

                $reg=eventRegisteration::where('event_id','=',Session::get('res'))->get();
               // $res=eventRegisteration::where('event_id','=',2)->get();

                $ev=events::find(Session::get('res'));
                foreach($reg as $r){
                    $us=usersData::where('email','=',$r->user_id)->first();

                    echo <<<EOT
   <tr>
	<hr>
	  <td>
		 <h3>Event Title</h3>$ev->title<h5></h5>
	  </td>
	   <td>
		 <h3>Client Name</h3> <h5> $us->name</h5>

	  </td>
	  <td>
		 <h3>Client Email</h3> <h5> $us->email</h5>
	  </td>
	  <td>
		 <h3>Phone Number</h3> <h5> $us->mobile</h5>
	  </td>
	  <td>

	       <button type="button" class="btn btn-danger" onclick="window.location.href='/delete_reg/$r->id'">Delete</button>
	  </td>
	<hr>
	</tr>

EOT;




                }
                ?>

                </tbody>

            </div>



        </div>
    </div>

@stop
