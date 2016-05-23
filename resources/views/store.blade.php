@extends('layout')
@section('title')
<title>Store</title>
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
    <a class="left carousel-control" href="#theCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"> </span>
    </a>
    <a class="right carousel-control" href="#theCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
  
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">NEW 
          <strong>ARRIVALS</strong>
        </h2>
        <hr>
      </div>
    </div>
    
    
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 text-center" >
        <img class="img-responsive img-border img-full" src="img/newar1.jpg" alt="">
      </div>
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 text-center" >
        <img class="img-responsive img-border img-full" src="img/newar2.jpg" alt="">
      </div>
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 text-center" >
        <img class="img-responsive img-border img-full" src="img/newar3.jpg" alt="">
      </div>
      <div class="clearfix visible-md"></div>
      <div class="clearfix visible-sm"></div>
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 text-center" >
        <img class="img-responsive img-border img-full" src="img/newar1.jpg" alt="">
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">ALL 
          <strong>OUR PRODUCTS</strong>
        </h2>
        <hr>    
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="thumbnail">
          <img src="img/newar2.jpg" alt="...">
          <div class="caption">
            <h3 class="intro-text text-center" >Hamburger</h3>
            <p class="intro-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="thumbnail">
          <img src="img/newar2.jpg" alt="...">
          <div class="caption">
            <h3 class="intro-text text-center">Polenta</h3>
            <p class="intro-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="thumbnail">
          <img src="img/newar2.jpg" alt="...">
          <div class="caption">
            <h3 class="intro-text text-center">Meatball Sub</h3>
            <p class="intro-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="thumbnail">
          <img src="img/newar2.jpg" alt="...">
          <div class="caption">
            <h3 class="intro-text text-center">Eggplant</h3>
            <p class="intro-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="thumbnail">
          <img src="img/newar2.jpg" alt="...">
          <div class="caption">
            <h3 class="intro-text text-center">Meatball Sub</h3>
            <p class="intro-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="thumbnail">
          <img src="img/newar2.jpg" alt="...">
          <div class="caption">
            <h3 class="intro-text text-center">Meatball Sub</h3>
            <p class="intro-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="thumbnail">
          <img src="img/newar2.jpg" alt="...">
          <div class="caption">
            <h3 class="intro-text text-center">Meatball Sub</h3>
            <p class="intro-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="thumbnail">
          <img src="img/newar2.jpg" alt="...">
          <div class="caption">
            <h3 class="intro-text text-center">Meatball Sub</h3>
            <p class="intro-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="thumbnail">
          <img src="img/newar2.jpg" alt="...">
          <div class="caption">
            <h3 class="intro-text text-center">Meatball Sub</h3>
            <p class="intro-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      
      
      
      
      
    </div>

    
    
    
    
    
  </div>
  @stop