<?php
use App\events;use App\usersData;
use App\eventRegisteration;
use \Illuminate\Support\Facades\Session;

?>



@extends('layout')
@section('title')
    <title>Res</title>
@stop
@section('content')

    <div class="container" >
        <div class="row">

            <div class="table-responsive">
                <tbody>

                <?php

                $reg=\App\roomReservation::find(Session::get('room_res_id'));


                    $us=usersData::where('email','=',$reg->email)->first();

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
		 <h3> Starting from</h3> <h5> $reg->starting_date at $reg->starting_time</h5>
	  </td>
 <td>
		 <h3> Starting from</h3> <h5> $reg->ending_date at $reg->ending_time</h5>
	  </td>
	   <td>
		 <h3> Number of People</h3> <h5> $reg->people_num</h5>
	  </td>

	  <td>
		 <h3> Projector</h3> <h5> $reg->projector</h5>
	  </td>

	  <td>

	       <button type="button" class="btn btn-danger" onclick="window.location.href='/delete_room_res/$reg->id'">Delete</button>
	  </td>

	<hr>
	</tr>

EOT;





                ?>

                </tbody>

            </div>



        </div>
    </div>

@stop
