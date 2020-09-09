<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <!-- External CSS libraries --
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="css/magnific-popup.css">
  <link type="text/css" rel="stylesheet" href="css/jquery.selectBox.css">
  <link type="text/css" rel="stylesheet" href="css/rangeslider.css">
  <link type="text/css" rel="stylesheet" href="css/animate.min.css">
  <link type="text/css" rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
  <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
  <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

  <!-- Favicon icon -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

  <!-- Google fonts -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

  <!-- Custom Stylesheet
  <link type="text/css" rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" id="style_sheet" href="css/default.css">-->
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/all.css') }}" rel="stylesheet">

</head>

<body id="top">
  <div class="page_loader"></div>
  <!-- main header start -->
  <header class="main-header sticky-header header-with-top" id="main-header-2">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light rounded">
                <a class="navbar-brand logo" href="index.html">
                    <img src="images/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="{{route('homepage')}}" id="navbarDropdownMenuLink"
                                aria-haspopup="true" aria-expanded="false">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown9" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Our Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown9">
                                <a class="dropdown-item" href="{{route('mobilepage')}}">Mobile App
                                    Development</a>
                                <a class="dropdown-item" href="{{route('webdevelop')}}">Web Development</a>
                                <a class="dropdown-item" href="portfolio-details.html">Enterprise Software
                                    Development</a>
                                <a class="dropdown-item" href="portfolio-details-2.html">Converged Network</a>
                            </div>
                        </li>
                        <!--<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink5"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                        href="#">Website
                                        Development</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="blog-classic-sidebar-right.html">Custom Website
                                                Development</a></li>
                                        <li><a class="dropdown-item"
                                                href="blog-classic-sidebar-left.html">Ecommerce Website
                                                Development</a></li>
                                        <li><a class="dropdown-item" href="blog-classic-sidebar-left.html">Php
                                                Website
                                                Development</a></li>
                                        <li><a class="dropdown-item" href="blog-classic-sidebar-left.html">AJAX
                                                Programming</a></li>
                                        <li><a class="dropdown-item" href="blog-classic-fullwidth.html">Static
                                                Web Design</a></li>
                                        <li><a class="dropdown-item"
                                                href="blog-classic-fullwidth.html">Webservice API</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                        href="#">Mobile
                                        Development</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="blog-columns-2col.html">IPhone
                                                Application Development</a>
                                        </li>
                                        <li><a class="dropdown-item" href="blog-columns-2col.html">IPad
                                                Application Development</a>
                                        </li>
                                        <li><a class="dropdown-item" href="blog-columns-2col.html">Android
                                                Application Development</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                        href="#">Custom Frameworks</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="blog-single-sidebar-right.html">Laravel Development</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="blog-single-sidebar-left.html">CodeIgniter Framework</a>
                                        </li>
                                        <li><a class="dropdown-item" href="blog-single-fullwidth.html">Nodejs
                                                Developemnt</a></li>
                                        <li><a class="dropdown-item" href="blog-single-fullwidth.html">Reactjs
                                                Developemnt</a></li>
                                        <li><a class="dropdown-item" href="blog-single-fullwidth.html">Vuejs
                                                Developemnt</a></li>
                                        <li><a class="dropdown-item" href="blog-single-fullwidth.html">Angular
                                                Developemnt</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{route('aboutus')}}" id="navbarDropdown10"
                                role="button" aria-haspopup="true" aria-expanded="false">
                                About Us
                            </a>
                        </li>


                        <li class="nav-item dropdown d-none d-md-block">
                            <a href="#full-page-search" class="nav-link">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="open-offcanvas nav-link" href="#">
                                <span></span>
                                <span class="fa fa-bars"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- main header end -->

  @yield('page-banner')

  @yield('page-content')


  <!-- intro section start -->
  <div class="intro-section">
    <div class="container">
      <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 space1">
          <img src="images/logo.png" alt="loo">
        </div>
        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-12 offset-1">
          <div class="intro-text">
            <h3>have any queries? call us anytime</h3>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
          <a href="{{route('contactus')}}" class="btn btn-md">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
  <!-- intro section end -->

  <!-- COntact start -->
  <div class="contacts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 row contact-text">
                <div class="col-lg-4 col-md-6 contact-item"><i class="fa fa-map-marker"></i> Lagos .... Dublin</div>
                <div class="col-lg-4 col-md-6 contact-item"><a href="mailto:engage@qhromeit.com"><i class="fa fa-envelope"></i> engage@qhromeit.com</a></div>
                <div class="col-lg-4 col-md-6 contact-item"><a href="tel:+2348034072526"><i class="fa fa-phone"></i> +2348034072526, +353899432466</a></div>
            </div>
        </div>
    </div>
</div>
<!-- COntact end -->

  <!-- Footer start -->
  <footer class="footer">
    <div class="container footer-inner">
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="footer-item">
            <img src="images/logo.png" alt="QHRME IT">
            <p>At QHRME IT, we discover ideas, understand the concept, and take these ideas to an
              extraordinary edge, where this ideas provide beautiful outcome, which is truly unexpected
              and beneficial in all the ways to our clients.</p>

            <ul class="social-list clearfix">
              <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
              <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="footer-item">
            <h4>Our Services</h4>
            <ul class="links">
              <li>
                <a href="#"><i class="fa fa-hand-o-right"></i>Custom Software Development</a>
              </li>
              <li>
                <a href="{{route('webdevelop')}}"><i class="fa fa-hand-o-right"></i>Web Application
                  Development</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-hand-o-right"></i>Application
                  Modernization</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-hand-o-right"></i>UX/UI Development and Design</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-hand-o-right"></i>QA and
                  Software Testing</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="recent-posts footer-item">
            <h4>About Us</h4>
            <ul class="links">
              <li>
                <a href="about-1.html"><i class="fa fa-certificate"></i>How We Work</a>
              </li>
              <li>
                <a href="services-1.html"><i class="fa fa-certificate"></i>Technology Expertise</a>
              </li>
              <li>
                <a href="portfolio-3column.html"><i class="fa fa-certificate"></i>Blog</a>
              </li>
              <li>
                <a href="portfolio-3column.html"><i class="fa fa-certificate"></i>FAQ</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="footer-item">
            <h4>Contact us</h4>
            <ul class="links">
              <li>
                <a href="#"><i class="fa fa-map-marker"></i>Lagos .... Dublin</a>
              </li>
              <li>
                <a href="mailto:engage@qhromeit.com"><i class="fa fa-envelope-o"></i>engage@qhromeit.com</a>
              </li>
              <li>
                <a href="tel:+234803407252600.3













































                "><i class="fa fa-phone"></i>+2348034072526, +353899432466</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-12">
          <p class="copy">&copy; 2020 <a href="http://qhromeit.com/" target="_blank">QHROME IT</a>.
            Trademarks and
            brands are the property of their respective owners.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- Full Page Search -->
  <div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="#">
      <input type="search" value="" placeholder="type keyword(s) here" />
      <button type="button" class="btn btn-sm btn-color">Search</button>
    </form>
  </div>

  <!-- External JS libraries --
  <script src="js/jquery-2.2.0.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.selectBox.js"></script>
  <script src="js/rangeslider.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.filterizr.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/backstretch.js"></script>
  <script src="js/jquery.countdown.js"></script>
  <script src="js/jquery.scrollUp.js"></script>
  <script src="js/particles.min.js"></script>
  <script src="js/typed.min.js"></script>
  <script src="js/jquery.mb.YTPlayer.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/ie-emulation-modes-warning.js"></script>
  <!-- Custom JS Script
  <script src="js/app.js"></script>-->
  <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
</body>

</html>
