<?php
use App\membership;
?>


@extends('layout')
@section('title')
    <title>Custom Requests</title>
@stop
@section('content')



    <div class="container" >
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">custom
                    <strong>Requests</strong>
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
                    $memberships=membership::all();
                    foreach($memberships as $mem){




                        if($mem->type=="custom"){

                            $cus=\App\custom_emberships::where('membership_id','=',$mem->id)->first();
                            if($cus->confirm==false){
                                echo <<<EOT
   <tr>
	<hr>
	  <td>
		 <h3>Type</h3> <h5> $mem->type</h5>
	  </td>
	   <td>
		 <h3>Client Email</h3> <h5> $mem->user_id</h5>
	  </td>
	  <td>

	       <button type="button" class="btn btn-warning" onclick="window.location.href='/setId/$mem->id'">View</button>
	       <button type="button" class="btn btn-warning" onclick="window.location.href='/view_req/$cus->id'">confirm</button>

	       <button type="button" class="btn btn-danger" onclick="window.location.href='/delete_membership/$mem->id'">delete</button>




	  </td>
	<hr>
	</tr>
EOT;


                            }
                        }

                    }
                    ?>

                    </tbody>

                </div>



            </div>
        </div>

        </body>

        @stop





