<!doctype html>
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

	<script type="text/javascript" src="{{URL::asset('js/jquery.1.8.3.min.js') }}"></script>
	<script type="text/javascript" src="{{URL::asset('js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery-scrolltofixed.js') }}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.easing.1.3.js') }}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.isotope.js') }}"></script>
	<script type="text/javascript" src="{{URL::asset('js/wow.js') }}"></script>
	<script type="text/javascript" src="{{URL::asset('js/classie.js') }}"></script>
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
    
<<<<<<< HEAD

    
    
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
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Login</div>
          <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
              {!! csrf_field() !!}

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                  <input type="email" required="required" class="form-control" name="email" value="{{ old('email') }}">


                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">

                                <input type="password" required="required" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
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