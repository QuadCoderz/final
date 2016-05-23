<?php
use App\membership;
?>
<?php
use App\events;use App\usersData;
use App\eventRegisteration;
use \Illuminate\Support\Facades\Session;

?>



@extends('layout')
@section('title')
    <title>Memberships</title>
@stop
@section('content')

    <div class="container" >
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">add
                    <strong>event</strong>
                </h2>
                <hr>
            </div>
        </div>
        <div class="container" id="sign1">
            <!-- We can add text or buttons on the right and/or left of input elements. Use input-group-lg or input-group-sm for input sizing -->
            <form action="/add" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="input-group input-group-md">
                    <span class="input-group-addon">title</span>
                    <input type="text" class="form-control" name="title" >
                </div><br>

                <div class="input-group input-group-md">
                    <span class="input-group-addon">description  </span>

                    <textarea class="form-control" rows="3" name="desc" ></textarea>

                </div><br>


                <div class="input-group input-group-md">

                    <span class="input-group-addon">starting Date</span>
                    <input type="date" class="form-control" name="sdate" >
                </div><br>
                <div class="input-group input-group-md">

                    <span class="input-group-addon">Ending Date</span>
                    <input type="date" class="form-control" name="edate" >
                </div><br>

                <div class="input-group input-group-md">

                    <span class="input-group-addon">starting Time</span>
                    <input type="time" class="form-control" name="stime" >
                </div><br>

                <div class="input-group input-group-md">
                    <span class="input-group-addon">Ending Time</span>
                    <input type="time" class="form-control" name="etime"  >
                </div><br>

                <div class="input-group input-group-md">
                    <span class="input-group-addon">Fees</span>
                    <input type="number" class="form-control" name="fees" >
                </div><br>

                <div class="input-group input-group-md">
                    <span class="input-group-addon">Select image to upload:</span>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div><br>


                <div class="row">
                    <div class="col-lg-offset-6 col-md-offset-6 col-sm-offset-5 col-xs-offset-4">
                        <button type="submit" class = "btn btn-default btn-lg">submit</button>
                    </div>
                </div>
            </form>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

            <!-- Use downloaded version of Bootstrap -->
            <script src="js/bootstrap.min.js"></script>

        </div>
    </div>
    </body>


@stop





<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>Homepage</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/linecons.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>

    <!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->


</head>
</html>