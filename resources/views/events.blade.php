<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">

  <title>Events</title>

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
            <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
          </div>
          
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center " id ="pic2" >
            <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
          </div>
          
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center " id ="pic3">
            <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
          </div>
        </div>	
        <h2 class="intro-text text-center">Post Title
          <br>
          <small>October 13, 2013</small>
        </h2>
        <p>ut I must explain to you how all this mistaken idea of denouncing 
         pleasure and praising pain was born and I will give you a complete account 
         of the system, and expound the actual teachings of the great explorer of the truth,
         the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,
         because it is pleasure, but because those who do not know how to pursue pleasure rationally
         encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or
         desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in 
         which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever
         undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right 
         to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who 
         avoids a pain that produces
         no resultant pleasure?"</p>
         <div class="row">
          <div class="col-md-12">
            <div class="special-plan text-center">
              <p>If you are interseted book a seat</p>


              <a href="eventRegisterationController/{{$id}}" class="btn btn-blue">Book Now</a>


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

    <!-- 
        All links in the footer should remain intact. 
        Licenseing information is available at: http://bootstraptaste.com/license/
        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Butterfly
      -->
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

