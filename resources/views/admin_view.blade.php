
<?php
use App\events;
?>



@extends('layout')
@section('title')
    <title>Admin</title>
@stop
@section('content')

    <div class="container" >
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Admin</strong>
                </h2>
                <hr>
            </div>
        </div>
</div>
        <div class="container" >
            <div class="row">

                <div class="btn-group btn-group-justified" style="margin-top:20px">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-lg" onclick="window.location.href='/show'">Add Event</button>


                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-lg" onclick="window.location.href='/view_events'">View Events</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-lg" onclick="window.location.href='/view_memberships'">Memberships</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-lg" onclick="window.location.href='/view_room_res'">Room Requests</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-lg" onclick="window.location.href='/confirm'">Confirmed Rooms</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-lg" onclick="window.location.href='/conf'">Custom Requests</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-lg" onclick="window.location.href='/signOut'">Sign Out</button>
                    </div>
                </div>



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