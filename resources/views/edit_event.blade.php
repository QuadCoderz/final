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

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>

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
<header id="header_outer">
  <div class="container">
    <div class="header_section wow fadeInUp">
      <div class="logo"><a href="javascript:void(0)"><img src="img/logob.png" alt=""></a></div>
      <nav class="nav" id="nav">
        <ul class="toggle">
          <li><a href="#top_content">Home</a></li>
          <li><a href="#About_Us">About Us</a></li>
          <li><a href="#service">Services</a></li>
          <li><a href="#work_outer">Membership</a></li>
          <li><a href="#Portfolio">Events</a></li>
          <li><a href="#client_outer">Clients</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#">Join Us Bitch!</a></li>
          <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   
                    <b class="caret"></b>
                  </a>
                  <ul id="droplog" class="dropdown-menu">
                    <li><a href="#">a</a></li>
                    <li><a href="#">b</a></li>
                    <li><a href="#">c</a></li>
                  </ul>
                </li>
        </ul>
        <ul class="">
          <li><a href="#top_content">Home</a></li>
          <li><a href="#About_Us">About Us</a></li>
          <li><a href="#service">Services</a></li>
          <li><a href="#Membership">Membership</a></li>
          <li><a href="#Portfolio">Events</a></li>
          <li><a href="#client_outer">Clients</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#">Join Us Bitch!</a></li>
         <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      
      <b class="caret"></b>
    </a>
    <ul id="droplog" class="dropdown-menu">
      <li><a href="#">a</a></li>
      <li><a href="#">b</a></li>
      <li><a href="#">c</a></li>
    </ul>
  </li>
        </ul>
      </nav>
      <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> 
      

      </div>
  </div>
</header>
<!--Header_section--> 

<!--Top_content-->

<div class="container" >
<div class="row">
  <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">edit
                        <strong>event</strong>
                    </h2>
                    <hr>
  </div>
  </div>
<div class="container" id="sign1">
<!-- We can add text or buttons on the right and/or left of input elements. Use input-group-lg or input-group-sm for input sizing -->
    <form action="/update_event" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <div class="input-group input-group-md">
  <span class="input-group-addon">title</span>
  <input type="text" class="form-control" name="title" value="<?php echo $tit; ?>" >
</div><br>

<div class="input-group input-group-md">
  <span class="input-group-addon">description  </span>

  <textarea class="form-control" rows="3" name="desc" ><?php echo $tit; ?></textarea>

</div><br>


<div class="input-group input-group-md">

  <span class="input-group-addon">starting Date</span>
  <input type="date" class="form-control" name="sdate" value="<?php echo $sdate; ?>" >
</div><br>
        <div class="input-group input-group-md">

            <span class="input-group-addon">Ending Date</span>
            <input type="date" class="form-control" name="edate" value="<?php echo $edate; ?>" >
        </div><br>

        <div class="input-group input-group-md">

            <span class="input-group-addon">starting Time</span>
            <input type="time" class="form-control" name="stime" value="<?php echo $stime; ?>" >
        </div><br>


<div class="input-group input-group-md">
  <span class="input-group-addon">Ending Time</span>
  <input type="time" class="form-control" name="etime" value="<?php echo $etime; ?>" >
</div><br>

        <div class="input-group input-group-md">
            <span class="input-group-addon">Fees</span>
            <input type="number" class="form-control" name="fees" value="<?php echo $fees; ?>" >
        </div><br>

    <div class="input-group input-group-md">
        <span class="input-group-addon">Select image to upload:</span>
        <input type="file" name="fileToUpload" id="fileToUpload">
    </div><br>


        <input type="hidden" name="id" value="<?php echo $id?>">

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

<!--<script type="text/javascript">

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


--> 

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