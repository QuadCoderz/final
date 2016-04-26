<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">

  <title>Our Store</title>

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

    <!--Top_content-->

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
      
      
      
      
      
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      
      <!-- Use downloaded version of Bootstrap -->
      <script src="js/bootstrap.min.js"></script>
      
    </div> 
  </body>

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
          scrollTop: $($anchor.attr('href')).offset().top - 91
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