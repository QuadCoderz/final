<?php
use App\events;
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
                <h2 class="intro-text text-center">All
                    <strong>Events</strong>
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
                    $event=events::all();
                    foreach($event as $ev){


                        echo <<<EOT
   <tr>
	<hr>
	  <td>
		<img class="img-responsive img-full" src="$ev->imagePath" style="margin-bottom:-30px;width:450px ">
	  </td>
	  <td>
		  <h2> $ev->title</h2>
		  <p>$ev->desc</P>

	  </td>
	  <td>
	      <button type="button" class="btn btn-warning" onclick="window.location.href='/Events/$ev->id'">view</button>
	      	      <button type="button" class="btn btn-warning" onclick="window.location.href='/edit/$ev->id'">edit</button>
	      	      <button type="button" class="btn btn-danger" onclick="window.location.href='/delete_event/$ev->id'">delete</button>
	      	      <button type="button" class="btn btn-warning" onclick="window.location.href='/view_reg/$ev->id'">registerations</button>




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

