<?php
use App\events;use App\usersData;
use App\eventRegisteration;
use \Illuminate\Support\Facades\Session;

?>



@extends('layout')
@section('title')
    <title>confirmed</title>
@stop
@section('content')

    <div class="container" >
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Confirmed
                    <strong>Rooms</strong>
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

                $reg=\App\roomReservation::where('confirm','=',true)->get();

                foreach($reg as $r){
                    $us=usersData::where('email','=',$r->email)->first();

                    echo <<<EOT
   <tr>
	<hr>
	  <td>
		 <h3>Client Name</h3>$us->name<h5></h5>
	  </td>
	   <td>
		 <h3>Client Email</h3> <h5> $us->email</h5>

	  </td>

	  <td>
		 <h3>Phone Number</h3> <h5> $us->mobile</h5>
	  </td>


	  <td>

	       <button type="button" class="btn btn-danger" onclick="window.location.href='/delete_room_res_conf/$r->id'">Delete</button>
	       <button type="button" class="btn btn-warning" onclick="window.location.href='/set/$r->id'">View</button>
	       <button type="button" class="btn btn-warning" onclick="window.location.href='/unconfirm/$r->id'">UnConfirm</button>

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
