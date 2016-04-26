<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>Rooms</title>

	<link rel="icon" href="favicon.png" type="image/png">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/linecons.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">

  <link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>

  <!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

  <script type="text/javascript" src="{{URL::asset('js/jquery.1.8.3.min.js') }}"></script>
  <script type="text/javascript" src="{{URL::asset('js/bootstrap.js') }}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery-scrolltofixed.js') }}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery.easing.1.3.js') }}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery.isotope.js') }}"></script>
  <script type="text/javascript" src="{{URL::asset('js/wow.js') }}"></script>
  <script type="text/javascript" src="{{URL::asset('js/classie.js') }}"></script>
  <script src="{{URL::asset('js/sweetalert.min.js') }}"></script> 


<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
    <![endif]-->

    <script type="text/javascript">
    	$(document).ready(function(e) {
    		$('.res-nav_click').click(function(){
    			$('ul.toggle').slideToggle(600)	
    		});	

    		$(document).ready(function() {
    			$(window).bind('scroll', function() {
    				if ($(window).scrollTop() > 0) {
    					$('#header_outer').addClass('fixed');
    				}
    				else {
    					$('#header_outer').removeClass('fixed');
    				}
    			});

    		});


    	});	
    	function resizeText() {
    		var preferredWidth = 767;
    		var displayWidth = window.innerWidth;
    		var percentage = displayWidth / preferredWidth;
    		var fontsizetitle = 25;
    		var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
    		$(".divclass").css("font-size", newFontSizeTitle)
    	}
    </script>
    
    <style>





    	input[type=submit] {


    		width: 100px;
    		height: 50px;
    		border-radius: 10px;
    		margin-bottom: 8px;
    		color: black;
    		margin-left: 50px;

    	}



    	@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,600);	

    	html {
    		border-top: 5px solid #fff;
    		background: #58DDAF;
    		color: #2a2a2a;
    	}

    	html, body {
    		margin: 0;
    		padding: 0;
    		font-family: 'Open Sans';
    	}

    	h1 {
    		color: #fff;
    		text-align: center;
    		font-weight: 300;
    	}

    	#slider {
    		position: relative;
    		overflow: hidden;
    		margin: 20px auto 0 auto;
    		border-radius: 4px;
    	}

    	#slider ul {
    		position: relative;
    		margin: 0;
    		padding: 0;
    		height: 200px;
    		list-style: none;
    	}

    	#slider ul li {
    		position: relative;
    		display: block;
    		float: left;
    		margin: 0;
    		padding: 0;
    		width: 1000px;
    		height: 350px;
    		background: #ccc;
    		text-align: center;
    		line-height: 300px;
    	}

    	a.control_prev, a.control_next {
    		position: absolute;
    		top: 40%;
    		z-index: 999;
    		display: block;
    		padding: 4% 3%;
    		width: auto;
    		height: auto;
    		background: #2a2a2a;
    		color: #fff;
    		text-decoration: none;
    		font-weight: 600;
    		font-size: 18px;
    		opacity: 0.8;
    		cursor: pointer;
    	}

    	a.control_prev:hover, a.control_next:hover {
    		opacity: 1;
    		-webkit-transition: all 0.2s ease;
    	}

    	a.control_prev {
    		border-radius: 0 2px 2px 0;
    	}

    	a.control_next {
    		right: 0;
    		border-radius: 2px 0 0 2px;
    	}

    	.slider_option {
    		position: relative;
    		margin: 10px auto;
    		width: 160px;
    		font-size: 18px;
    	}




    </style>
    
    <script>

    	jQuery(document).ready(function ($) {

    		$('#checkbox').change(function(){
    			setInterval(function () {
    				moveRight();
    			}, 3000);
    		});

    		var slideCount = $('#slider ul li').length;
    		var slideWidth = $('#slider ul li').width();
    		var slideHeight = $('#slider ul li').height();
    		var sliderUlWidth = slideCount * slideWidth;

    		$('#slider').css({ width: slideWidth, height: slideHeight });

    		$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

    		$('#slider ul li:last-child').prependTo('#slider ul');

    		function moveLeft() {
    			$('#slider ul').animate({
    				left: + slideWidth
    			}, 200, function () {
    				$('#slider ul li:last-child').prependTo('#slider ul');
    				$('#slider ul').css('left', '');
    			});
    		};

    		function moveRight() {
    			$('#slider ul').animate({
    				left: - slideWidth
    			}, 200, function () {
    				$('#slider ul li:first-child').appendTo('#slider ul');
    				$('#slider ul').css('left', '');
    			});
    		};

    		$('a.control_prev').click(function () {
    			moveLeft();
    		});

    		$('a.control_next').click(function () {
    			moveRight();
    		});

    	});    


    </script>   
    

  </head>
  <body>

   <!--Header_section-->
   <header id="header_outer" class="fadeInUp">
    <div class="container">
      <div class="header_section fadeInUp">
        <div class="logo"><a href="javascript:void(0)"><img src="img/logob.png" alt=""></a></div>
        <nav class="nav" id="nav">
          <ul class="toggle">
            <li><a href="/home">Home</a></li>
            <li><a href="/home#About_Us">About Us</a></li>
            <li><a href="{{ url('/RoomReservation') }}">Reservation</a></li>
            <li><a href="{{ url('/Store') }}">Store</a></li>
            <li><a href="/home#Membership">Membership</a></li>
            <li><a href="/home#Portfolio">Events</a></li>
            <li><a href="/home#contact">Contact</a></li>

            @if (Auth::guest())
            <li><a href="{{ url('/SignIn')}}">Login</a></li>
            <li><a href="{{ url('/SignUp') }}">Register</a></li>
            @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
              </ul>
            </li>
            @endif
          </ul>
          <ul class="">
            <li><a href="/home">Home</a></li>
            <li><a href="/home#About_Us">About Us</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                Services <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu" >
                <li><a href="{{ url('/RoomReservation') }}">Reservation</a></li>
                <li><a href="{{ url('/Store') }}">Store</a></li>

              </ul>
            </li>
            <li><a href="/home#Membership">Membership</a></li>
            <li><a href="/home#Portfolio">Events</a></li>
            <li><a href="/home#contact">Contact</a></li>

            @if (Auth::guest())
            <li><a href="{{ url('/SignIn') }}">Login</a></li>
            <li><a href="{{ url('/SignUp') }}">Register</a></li>
            @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/home') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
              </ul>
            </li>
            @endif



          </ul>

        </nav>
        <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> 


      </div>
    </div>
  </header>
  <!--Header_section--> 


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

       <form class="form-horizontal" role="form" method="POST" action="{{ url('/RoomReservation') }}">

        {!! csrf_field() !!}



        <table align="center" cellpadding = "10">

          <tr>
           <td>Reservation Date</td>
           <td><input type="date" name="Rdate" maxlength="30" placeholder="First Name"  required />
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

  <script type="text/javascript">
    $(document).ready(function(e) {
      $('#header_outer').scrollToFixed();
      $('.res-nav_click').click(function(){
        $('.main-nav').slideToggle();
        return false    

      });

    });
  </script> 
  <script>
    wow = new WOW(
    {
      animateClass: 'animated',
      offset:       100
    }
    );
    wow.init();
    document.getElementById('').onclick = function() {
      var section = document.createElement('section');
      section.className = 'wow fadeInDown';

      section.className = 'wow shake';
      section.className = 'wow zoomIn';
      section.className = 'wow lightSpeedIn';
      this.parentNode.insertBefore(section, this);
    };
  </script> 
  <script type="text/javascript">
   $(window).load(function(){

    $('a').bind('click',function(event){
     var $anchor = $(this);

     $('html, body').stop().animate({
      scrollTop: $($anchor.attr('href')).offset().top - 91co
    }, 1500,'easeInOutExpo');

			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});

  })

</script> 

<script type="text/javascript">


  $(window).load(function(){


    var $container = $('.portfolioContainer'),
    $body = $('body'),
    colW = 350,
    columns = null;


    $container.isotope({

    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });


    $(window).smartresize(function(){

    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )

      .isotope('reLayout');
    }

  }).smartresize(); // trigger resize to set container width
    $('.portfolioFilter a').click(function(){
      $('.portfolioFilter .current').removeClass('current');
      $(this).addClass('current');

      var selector = $(this).attr('data-filter');
      $container.isotope({

        filter: selector,
      });
      return false;
    });

  });

</script>


<script type="text/javascript">


	jQuery(document).ready(function($){     
// Portfolio Isotope
var container = $('#portfolio-wrap');	


container.isotope({
	animationEngine : 'best-available',
	animationOptions: {
		duration: 200,
		queue: false
	},
	layoutMode: 'fitRows'
});	

$('#filters a').click(function(){
	$('#filters a').removeClass('active');
	$(this).addClass('active');
	var selector = $(this).attr('data-filter');
	container.isotope({ filter: selector });
	setProjects();		
	return false;
});


function splitColumns() { 
	var winWidth = $(window).width(), 
	columnNumb = 1;


	if (winWidth > 1024) {
		columnNumb = 4;
	} else if (winWidth > 900) {
		columnNumb = 2;
	} else if (winWidth > 479) {
		columnNumb = 2;
	} else if (winWidth < 479) {
		columnNumb = 1;
	}

	return columnNumb;
}		

function setColumns() { 
	var winWidth = $(window).width(), 
	columnNumb = splitColumns(), 
	postWidth = Math.floor(winWidth / columnNumb);

	container.find('.portfolio-item').each(function () { 
		$(this).css( { 
			width : postWidth + 'px' 
		});
	});
}		

function setProjects() { 
	setColumns();
	container.isotope('reLayout');
}		

container.imagesLoaded(function () { 
	setColumns();
});


$(window).bind('resize', function () { 
	setProjects();			
});

});
	$( window ).load(function() {
		jQuery('#all').click();
		return false;
	});
</script>
</body>
</html>