<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">

  @if (Auth::guest())
  <title>Creative</title>
  @else
  <title>Home</title>
  @endif
  

  <link rel="icon" href="favicon.png" type="image/png">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/linecons.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="css/responsive.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">

  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


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


  <div id="top_content" class="row wow fadeInUp">

    <div class="col-lg-12 text-center">
      <div id="carousel-example-generic" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators hidden-xs">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
          </div>
          <div class="item">
            <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
          </div>
          <div class="item">
            <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="icon-next"></span>
        </a>
      </div>
      <h2 class="brand-before wow fadeInUp">
        <small>Welcome to</small>
      </h2>
      <h1 class="brand-name wow bounceInLeft delay-03s">Creativo</h1>
      <hr class="tagline-divider">
    </div>
  </div>

  <!--About Us--> 
  <section id="About_Us">
    <div class="container">
      <div class="row">

        <div class="section-title text-center wow fadeInUp">
          <h2>About Us</h2>    
          <p>Creativo is like the gym for freelancers, start-ups and entrepreneurs. Yeah you can set up your desk in your living room, just like you can set up a treadmill, but how much fun is working or working out alone really? Working alone kinda sucks. You may have the most organized sock drawer in town. Just think for a moment what it could create for your business if you spent even a few days a week in an environment where everyone around you was also working on their business?

            As a community of local-minded and business-focused people, we are able to collaborate on projects, share resources and generate more success to support our livelihoods.

            Our Values:

            Collaboration
            Openness
            Community
            Accessibility
            Sustainability 

            Creativo is designed to help your business thrive.

            Start-up school is our main event.</p>
          </div>
        </div>
      </div>
    </section>
    <!--Service-->
    <section  id="service">
      <div class="container">
        <div class="section-title text-center wow fadeInUp">
         <h2>Services</h2>
       </div>
       <div class="service_area">
        <div class="row">
          <div class="col-lg-4">
            <div class="service_block">

              <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa-book"></i></span> </div>
              <h3 class="animated fadeInUp wow">Study</h3>

              <p class="animated fadeInDown wow">Proin iaculis purus consequat sem cure digni. Donec porttitora entum suscipit  aenean rhoncus posuere odio in tincidunt.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service_block">

              <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa-wifi"></i></span> </div>
              <h3 class="animated fadeInUp wow">Wifi</h3>

              <p class="animated fadeInDown wow">Proin iaculis purus consequat sem cure digni. Donec porttitora entum suscipit  aenean rhoncus posuere odio in tincidunt.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service_block">

              <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa-paint-brush"></i></span> </div>
              <h3 class="animated fadeInUp wow">Paint</h3>

              <p class="animated fadeInDown wow">Proin iaculis purus consequat sem cure digni. Donec porttitora entum suscipit  aenean rhoncus posuere odio in tincidunt.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Service-->

  <section id="Membership">
    <div class="container">
      <div class="row">

        <div class="section-title text-center wow fadeInUp">
          <h2>Membership</h2>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
          <div class="pricing-table text-center">
            <div class="price">
              <span class="plan">Basic</span>
              <span class="value"><small>EGP</small><strong>19</strong>/MO</span>
            </div>
            <ul class="text-center">
              <li>Feature N0 1</li>
              <li>Feature N0 2</li>
              <li>Feature N0 3</li>
              <li>Feature N0 4</li>
            </ul>


            <a href="/SignIn" class="btn btn-price">Subscribe Now</a>


          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
          <div class="pricing-table text-center">
            <div class="price">
              <span class="plan">Premium</span>
              <span class="value"><small>EGP</small><strong>29</strong>/MO</span>
            </div>
            <ul class="text-center">
              <li>Feature N0 1</li>
              <li>Feature N0 2</li>
              <li>Feature N0 3</li>
              <li>Feature N0 4</li>
            </ul>


            <a href="/SignIn" class="btn btn-price">Subscribe Now</a>

          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
          <div class="pricing-table text-center">
            <div class="price">
              <span class="plan">Pro</span>
              <span class="value"><small>EGP</small><strong>39</strong>/MO</span>
            </div>
            <ul class="text-center">
              <li>Feature N0 1</li>
              <li>Feature N0 2</li>
              <li>Feature N0 3</li>
              <li>Feature N0 4</li>
            </ul>

            <a href="/SignIn" class="btn btn-price">Subscribe Now</a>


          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.9s">
          <div class="pricing-table text-center">
            <div class="price">
              <span class="plan">Platinum</span>
              <span class="value"><small>EGP</small><strong>49</strong>/MO</span>
            </div>
            <ul class="text-center">
              <li>Feature N0 1</li>
              <li>Feature N0 2</li>
              <li>Feature N0 3</li>
              <li>Feature N0 4</li>
            </ul>


            <a href="/SignIn"  class="btn btn-price">Subscribe Now</a>


          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 wow fadeInUp">
          <div class="special-plan text-center">
            <div class="dropdown ">
              <p>Contact us if you have special request</p>
              <a href="#" class=" btn btn-blue  dropdown-toggle"type="button" data-toggle="dropdown">Customize your own <span class="caret"></span></a>

              <ul class="dropdown-menu col-md-4 " style="margin-top: 10px; position: absolute; float: none;">

                <form>
                  <div>
                    <label><input type="checkbox" /> feature 1</label>

                  </div>
                  <div>
                    <label><input type="checkbox" /> feature 2</label>

                  </div>
                  <div>
                    <label><input type="checkbox" /> feature 3</label>

                  </div>
                  <div>

                    <a href="/SignIn" type="button" class="btn btn-primary" style="margin-top: 10px;">Submit</a>

                  </div>
                </form>
              </ul>

            </div>

          </div>

        </div>

                  <!--  <div class="dropdown col-md-offset-5 col-md-3">
                                <a class="btn  btn-blue dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#">HTML</a></li>
                                  <li><a href="#">CSS</a></li>
                                  <li><a href="#">JavaScript</a></li>
                                </ul>
                              </div>
                            </div>-->
                          </div>
                        </section>
                        <!--main-section-end--> 

                        <!--new_portfolio--> 


                        <!-- Portfolio -->
                        <section id="Portfolio" class="content"> 

                          <!-- Container -->
                          <div class="container portfolio-title"> 

                            <!-- Section Title -->
                            <div class="section-title text-center wow fadeInUp">
                              <h2>Events</h2>
                            </div>
                            <!--/Section Title --> 

                          </div>
                          <!-- Container -->

                          <!-- Portfolio Plus Filters -->


                          <div class="portfolio"> 

                            <!-- Portfolio Wrap -->
                            <div class="isotope wow fadeInUp delay-03s" style="position: relative; overflow: hidden; height: 480px;" id="portfolio-wrap"> 

                              <!-- Portfolio Item With PrettyPhoto  -->
                              <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   videography isotope-item">
                                <div class="portfolio-image"> <img src="img/19.jpg"  alt="Portfolio 1"> </div>
                                <a title="Event 1" rel="prettyPhoto[galname]" 

                                href="/Events/1" target="_blank">

                                <div class="project-overlay">
                                  <div class="project-info">
                                    <div class="zoom-icon"></div>
                                    <h4 class="project-name">Event 1</h4>
                                    <p class="project-categories">more details</p>
                                  </div>
                                </div>
                              </a> </div>
                              <!--/Portfolio Item With PrettyPhoto  --> 

                              <!-- Portfolio Item Video Expander  -->
                              <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   videography isotope-item">
                                <div class="portfolio-image"> <img src="img/41 5alas.jpg"  alt="Portfolio 1"> </div>

                                <a title="Event 2" rel="prettyPhoto[galname]"
                                href="/Events/2" target="_blank">

                                <div class="project-overlay">
                                  <div class="project-info">
                                    <div class="zoom-icon"></div>
                                    <h4 class="project-name">Event 2</h4>
                                    <p class="project-categories">more details</p>
                                  </div>
                                </div>
                              </a> </div>
                              <!--/Portfolio Item Video Expander  --> 

                              <!-- Portfolio Item Normal Expander -->
                              <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   videography isotope-item">
                                <div class="portfolio-image"> <img src="img/19.jpg"  alt="Portfolio 1"> </div>

                                <a title="Event 3" rel="prettyPhoto[galname]"
                                href="/Events/3" target="_blank">

                                <div class="project-overlay">
                                  <div class="project-info">
                                    <div class="zoom-icon"></div>
                                    <h4 class="project-name">Event 3</h4>
                                    <p class="project-categories">more details</p>
                                  </div>
                                </div>
                              </a> </div>
                              <!--/Portfolio Item Normal Expander --> 

                              <!-- Portfolio Item FullScreen Expander -->
                              <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   videography isotope-item">
                                <div class="portfolio-image"> <img src="img/19.jpg"  alt="Portfolio 1"> </div>

                                <a title="Event 4" rel="prettyPhoto[galname]"
                                href="/Events/4" target="_blank">

                                <div class="project-overlay">
                                  <div class="project-info">
                                    <div class="zoom-icon"></div>
                                    <h4 class="project-name">Event 4</h4>
                                    <p class="project-categories">more details</p>
                                  </div>
                                </div>
                              </a> </div>
                              <!-- Portfolio Item FullScreen Expander --> 

                              <!-- Portfolio Item FullScreen Expander -->
                              <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   videography isotope-item">
                                <div class="portfolio-image"> <img src="img/19.jpg"  alt="Portfolio 1"> </div>

                                <a title="Event 5" rel="prettyPhoto[galname]"
                                href="/Events/5" target="_blank">

                                <div class="project-overlay">
                                  <div class="project-info">
                                    <div class="zoom-icon"></div>
                                    <h4 class="project-name">Event 5</h4>
                                    <p class="project-categories">more details</p>
                                  </div>
                                </div>
                              </a> </div>
                              <!--/Portfolio Item FullScreen Expander --> 

                              <!-- Portfolio Item Normal Expander -->
                              <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   videography isotope-item">
                                <div class="portfolio-image"> <img src="img/19.jpg"  alt="Portfolio 1"> </div>

                                <a title="Event 6" rel="prettyPhoto[galname]"
                                href="/Events/6" target="_blank">

                                <div class="project-overlay">
                                  <div class="project-info">
                                    <div class="zoom-icon"></div>
                                    <h4 class="project-name">Event 6</h4>
                                    <p class="project-categories">more details</p>
                                  </div>
                                </div>
                              </a> </div>
                              <!--/Portfolio Item Normal Expander --> 

                              <!-- Portfolio Item External Project  -->
                              <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   videography isotope-item">
                                <div class="portfolio-image"> <img src="img/19.jpg"  alt="Portfolio 1"> </div>

                                <a title="Event 7" rel="prettyPhoto[galname]"
                                href="/Events/7" target="_blank">

                                <div class="project-overlay">
                                  <div class="project-info">
                                    <div class="zoom-icon"></div>
                                    <h4 class="project-name">Event 7</h4>
                                    <p class="project-categories">more details</p>
                                  </div>
                                </div>
                              </a> </div>
                              <!--/Portfolio Item External Project  --> 

                              <!-- Portfolio Item With PrettyPhoto  -->
                              <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   videography isotope-item">
                                <div class="portfolio-image"> <img src="img/19.jpg"  alt="Portfolio 1"> </div>

                                <a title="Event 8" rel="prettyPhoto[galname]"
                                href="/Events/8" target="_blank">

                                <div class="project-overlay">
                                  <div class="project-info">
                                    <div class="zoom-icon"></div>
                                    <h4 class="project-name">Event 8</h4>
                                    <p class="project-categories">more details</p>
                                  </div>
                                </div>
                              </a> </div>
                              <!--/Portfolio Item With PrettyPhoto  --> 

                              <!--/Portfolio Wrap --> 
                            </div>
                          </div>
                          <!--/Portfolio Plus Filters -->
                        </div>
                        <div class="portfolio-bottom"></div>

                        <!-- Project Page Holder-->
                        <div id="project-page-holder">
                          <div class="clear"></div>
                          <div id="project-page-data"></div>
                        </div>
                        <!--/Project Page Holder--> 

                      </section>
                      <!--/Portfolio --> 
                      <!--new_portfolio--> 

<!--
<section class="main-section paddind" id="Portfolio">
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9694bd9536eb83be9df91327bebf2a2f3df2bf8b
    <div class="container">
        <h2>Portfolio</h2>
        <h6>Fresh portfolio of designs that will keep you wanting more.</h6>
    </div>
    
    
</section>   
<<<<<<< HEAD
=======
	<div class="container">
    	<h2>Portfolio</h2>
    	<h6>Fresh portfolio of designs that will keep you wanting more.</h6>
	</div>
    
    
</section>   

>>>>>>> 60be2b45e4cc1cb933e726a143e6431ebafe1449
=======

>>>>>>> 9694bd9536eb83be9df91327bebf2a2f3df2bf8b
-->
<section class="main-section" id="client_outer"><!--main-section client-part-start-->
  <div class="section-title text-center wow fadeInUp">
   <h2>Happy Clients</h2>

 </div>
 <div class="client_area ">
  <div class="client_section animated  fadeInUp wow">
    <div class="client_profile">
      <div class="client_profile_pic"><img src="img/client-pic1.jpg" alt=""></div>
      <h3>Saul Goodman</h3>
      <span>Lawless Inc</span> </div>
      <div class="quote_section">
        <div class="quote_arrow"></div>
        <p><b><img src="img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="img/quote_sign_right.png" alt=""></small> </p>
      </div>
      <div class="clear"></div>
    </div>
    <div class="client_section animated  fadeInDown wow">
      <div class="client_profile flt">
        <div class="client_profile_pic"><img src="img/client-pic2.jpg" alt=""></div>
        <h3>Marie Schrader</h3>
        <span>DEA Foundation</span> </div>
        <div class="quote_section flt">
          <div class="quote_arrow2"></div>
          <p><b><img src="img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="img/quote_sign_right.png" alt=""></small> </p>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </section>
  <!--main-section client-part-end-->

  <div class="c-logo-part"><!--c-logo-part-start-->
    <div class="container">
      <ul class="delay-06s animated  bounce wow">
        <li><a href="javascript:void(0)"><img src="img/c-liogo1.png" alt=""></a></li>
        <li><a href="javascript:void(0)"><img src="img/c-liogo2.png" alt=""></a></li>
        <li><a href="javascript:void(0)"><img src="img/c-liogo3.png" alt=""></a></li>
        <li><a href="javascript:void(0)"><img src="img/c-liogo5.png" alt=""></a></li>
      </ul>
    </div>
  </div>
  <!--c-logo-part-end-->

  <section class="main-section team" id="team"><!--main-section team-start-->
    <div class="container">
      <div class="section-title text-center wow fadeInUp">
        <h2>Amazing Team</h2>
      </div>

      <h6>Take a closer look into our amazing team. We won’t bite.</h6>
      <div class="team-leader-block clearfix">
        <div class="team-leader-box">
          <div class="team-leader wow fadeInDown delay-03s">
            <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
            <img src="img/team-leader-pic1.jpg" alt="">
            <ul>
              <li><a href="javascript:void(0)" class="fa-twitter"></a></li>
              <li><a href="javascript:void(0)" class="fa-facebook"></a></li>
              <li><a href="javascript:void(0)" class="fa-pinterest"></a></li>
              <li><a href="javascript:void(0)" class="fa-google-plus"></a></li>
            </ul>
          </div>
          <h3 class="wow fadeInDown delay-03s">Walter White</h3>
          <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
          <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
        </div>
        <div class="team-leader-box">
          <div class="team-leader  wow fadeInDown delay-06s">
            <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
            <img src="img/team-leader-pic2.jpg" alt="">
            <ul>
              <li><a href="javascript:void(0)" class="fa-twitter"></a></li>
              <li><a href="javascript:void(0)" class="fa-facebook"></a></li>
              <li><a href="javascript:void(0)" class="fa-pinterest"></a></li>
              <li><a href="javascript:void(0)" class="fa-google-plus"></a></li>
            </ul>
          </div>
          <h3 class="wow fadeInDown delay-06s">Jesse Pinkman</h3>
          <span class="wow fadeInDown delay-06s">Product Manager</span>
          <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
        </div>
        <div class="team-leader-box">
          <div class="team-leader wow fadeInDown delay-09s">
            <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
            <img src="img/team-leader-pic3.jpg" alt="">
            <ul>
              <li><a href="javascript:void(0)" class="fa-twitter"></a></li>
              <li><a href="javascript:void(0)" class="fa-facebook"></a></li>
              <li><a href="javascript:void(0)" class="fa-pinterest"></a></li>
              <li><a href="javascript:void(0)" class="fa-google-plus"></a></li>
            </ul>
          </div>
          <h3 class="wow fadeInDown delay-09s">Skyler white</h3>
          <span class="wow fadeInDown delay-09s">Accountant</span>
          <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
        </div>
      </div>
    </section>
  </div>
  <!--main-section team-end-->
  <div class="container">
    <section class="twitter-feed"><!--twitter-feed-->
      <div class="container  animated fadeInDown delay-07s wow">
        <div class="twitter_bird"><span><i class="fa-twitter"></i></span></div>
        <p> When you're the underdog, your only option is to make #waves if you want to succeed. How much <br>
          and how often should you be drinking coffee?</p>
          <span>About 28 mins ago</span> </div>
        </section>
        <!--twitter-feed-end-->
        <footer class="footer_section" id="contact">
          <div class="container">
            <section class="main-section contact" id="contact">
              <div class="contact_section">
                <h2>Contact Us</h2>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="contact_block">
                      <div class="contact_block_icon rollIn animated wow"><span><i class="fa-home"></i></span></div>
                      <span> 10شارع حسين واصف ميدان المساحة, الدقي , مبني بيتزاهت الدور التالت <br>
                        Duqqi, Al Jizah, Egypt, 12345 </span> </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="contact_block">
                          <div class="contact_block_icon icon2 rollIn animated wow"><span><i class="fa-phone"></i></span></div>
                          <span> 0111 159 5410 </span> </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="contact_block">
                            <div class="contact_block_icon icon3 rollIn animated wow"><span><i class="fa-pencil"></i></span></div>
                            <span> <a href="mailto:hello@butterfly.com"> hello@butterfly.com</a> </span> </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 wow fadeInLeft">
                          <div class="contact-info-box address clearfix">
                            <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
                          </div>
                          <ul class="social-link">
                            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa-twitter"></i></a></li>
                            <li class="facebook animated bounceIn wow delay-03s"><a href="https://www.facebook.com/creativo.egypt/timeline"><i class="fa-facebook"></i></a></li>
                            <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa-pinterest"></i></a></li>
                            <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa-google-plus"></i></a></li>
                            <li class="dribbble animated bounceIn wow delay-06s"><a href="javascript:void(0)"><i class="fa-dribbble"></i></a></li>
                          </ul>
                        </div>
                        <div class="col-lg-6 wow fadeInUp delay-06s">
                          <div class="form">
                            <input class="input-text animated wow flipInY delay-02s" type="text" name="" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                            <input class="input-text animated wow flipInY delay-04s" type="text" name="" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                            <textarea class="input-text text-area animated wow flipInY delay-06s" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                            <input class="input-btn animated wow flipInY delay-08s" type="submit" value="send message">
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                  
                </div>
              </footer>

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
                $('.dropdown-menu input, .dropdown-menu label').click(function(e) {
                  e.stopPropagation();
                });
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

