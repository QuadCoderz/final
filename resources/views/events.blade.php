<?php
use App\events;

$event=events::find($id);

?>



@extends('layout')
@section('title')
<title>Events</title>
@stop
@section('content')
    <div class="container wow fadeInUp delay-03s">

      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Events
              <strong>blog</strong>
            </h2>
            <hr>
          </div>
          <div class="row" >

           <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-center" id ="pic1">
            <img class="img-responsive img-border img-full" src="<?php echo $event->imagePath;?>" alt="" style="width: 700px;height: 450px">
          </div>
          
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center " id ="pic2" >
            <img class="img-responsive img-border img-full" src="<?php echo $event->imagePath;?>" alt="" style="width: 350px;height: 215px">
          </div>
          
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center " id ="pic3">
            <img class="img-responsive img-border img-full" src="<?php echo $event->imagePath;?>" alt=""style="width: 350px;height: 215px">
          </div>
        </div>  
        <h2 class="intro-text text-center"><?php echo $event->title;?>
          <br>
            starting:<small><?php echo $event->starting_date;?></small> at <small><?php echo $event->starting_time;?></small><br>
            ending:<small><?php echo $event->ending_date;?></small> at <small><?php echo $event->ending_time;?></small>

        </h2>
        <p><?php echo $event->desc;?></p>
            <h3 style=" display: inline-block;">Fees:</h3 ><h4 style=" display: inline-block;"><?php echo $event->fees;?></h4>
         <div class="row">
          <div class="col-md-12">
            <div class="special-plan text-center">
              <p>If you are interseted book a seat</p>


              <a href="Events/eventRegisterationController/{{$id}}" class="btn btn-blue">Book Now</a>


            </div>
          </div>
        </div>
        <hr>
        
      </div>
      <div class="col-lg-12 text-center">
        <ul class="pager">
          <li class="previous"><a href="#">&larr; Older</a>
          </li>
          <li class="next"><a href="#">Newer &rarr;</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

</div>
@stop
