@extends('layout')
@section('title')
<title>Rooms</title>
@stop
@section('content')
<div class="container">
    <div id="theCarousel" class="carousel slide" data-ride="carousel">

      <!-- Define how many slides to put in the carousel -->
      <ol class="carousel-indicators">
        <li data-target="#theCarousel" data-slide-to="0" class="active"> </li >
          <li data-target="#theCarousel" data-slide-to="1"> </li>
          <li data-target ="#theCarousel" data-slide-to="2"> </li>
        </ol >

        <!-- Define the text to place over the image -->

        <div class="carousel-inner">
          <div class="item active" >
            <div class ="slide1"><img src="img\0.jpg" class="img-responsive img-border img-full" ></div>

          </div>
          <div class="item">
            <div class="slide2"><img src="img\1.jpg" class="img-responsive img-border img-full" ></div>

          </div>
          <div class="item">
            <div class="slide3"><img src="img\2.jpg" class="img-responsive img-border img-full" ></div>



          </div>
        </div>

        <!-- Set the actions to take when the arrows are clicked -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="icon-next"></span>
        </a>
      </div>






      <div class="data">

       <form class="form-horizontal" role="form" method="POST" action="{{ url('/RoomReservation/add') }}">

        {!! csrf_field() !!}



        <table align="center" cellpadding = "10">

          <tr>
           <td> Date</td>
           From<td><input type="date" name="sdate" maxlength="30" placeholder="First Name"  required />
                  To<td><input type="date" name="edate" maxlength="30" placeholder="First Name"  required />

              </td>
         </tr>

         <tr>
           <td>From</td>
           <td><input type="time" name="Ftime"  required/>

           </td>
           <td>To</td>
           <td><input type="time" name="Ttime"  required/>

           </td>
         </tr>

         <tr>
           <td>Number of people</td>
           <td><input type="number" name="peopleNo"  required/>

           </td>

         </tr>

         <!--- Password -->
         <tr>
           <td>Do you need a projector ?</td>
           <td>
            <input type="radio" name="proj" value="yes" checked> YES<br>
          </td>
          <td>
            <input type="radio" name="proj" value="NO" checked> NO<br>
          </td>
        </tr>





        <tr>
          <td  align="center" colspan="2">
            <input type="submit" value="Submit" >
          </td>

        </table>

        


      </form>

    </div>

  </div>
@stop