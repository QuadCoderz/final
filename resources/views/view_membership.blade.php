<?php
use App\membership;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use App\Http\Requests;
?>

@extends('layout')
@section('title')
    <title>Membership</title>
@stop
@section('content')


    <div class="container" >
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">add/edit
                    <strong>event</strong>
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

                    $id=Session::get('mem_id');


                    if($type=="custom"){
                        echo <<<EOT
   <tr>
	<hr>
	 <td>
		 <h3>Client Name</h3> <h5> $cname</h5>
	  </td>

	 <td>
		 <h3>Client Email</h3> <h5> $email</h5>
	  </td>
	   <td>
		 <h3>Phone Number</h3> <h5>$mobile</h5>
	  </td>

	  <td>
		 <h3>Membership Type</h3> <h5>$type</h5>
	  </td>

        <td>
		 <h3>Feature 1</h3> <h5> $f1</h5>
	  </td>
	  <td>
		 <h3>Feature 2</h3> <h5> $f2</h5>
	  </td>
	  <td>
		 <h3>Feature 3</h3> <h5> $f3</h5>
	  </td>
	  <td>
		 <h3>Feature 4</h3> <h5> $f4</h5>
	  </td>
	   <td>
		 <h3>Date</h3> <h5> $date</h5>
	  </td>

	  <td>




	       <button type="button" class="btn btn-danger" onclick="window.location.href='/delete_membership/$id'">Delete</button>




	  </td>
	<hr>
	</tr>
EOT;

                    }

                    else{

                        echo <<<EOT
   <tr>
	<hr>
	 <td>
		 <h3>Client Name</h3> <h5> $cname</h5>
	  </td>

	 <td>
		 <h3>Client Email</h3> <h5> $email</h5>
	  </td>
	   <td>
		 <h3>Phone Number</h3> <h5>$mobile</h5>
	  </td>

	  <td>
		 <h3>Membership Type</h3> <h5>$type</h5>
	  </td>


	  <td>

	       <button type="button" class="btn btn-danger" onclick="window.location.href='/delete_membership/$id'">Delete</button>
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

        </body>
        @stop




