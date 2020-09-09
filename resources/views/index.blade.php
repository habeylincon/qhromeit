<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Software Development Company - QHROME IT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- External CSS
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="css/jquery.selectBox.css">
    <link type="text/css" rel="stylesheet" href="css/rangeslider.css">
    <link type="text/css" rel="stylesheet" href="css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <!--
    https://www.optiinfo.com/service/website-development/ajax-programming/
    <div id="loader">
    <div class="loader_content">
      <img src="{{ asset('images/logo-main.png') }}" alt="">
      <h2>REBUCOM LOGISTICS</h2>
      <h2>LIMITED</h2>
    </div>

  </div>-->

    <!-- Top header start --
  <header class="top-header top-header-bg d-none d-xl-block d-lg-block d-md-block" id="top-header-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="list-inline">
            <a href="tel:1-XXX-XXX-XXX8"><i class="fa fa-phone"></i>1-XXX-XXX-XXX8</a>
            <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i>info@themevessel.com</a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <ul class="top-social-media pull-right">
            <li>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
            </li>
            <li>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i> </a>
            </li>
            <li>
              <a href="#" class="rss"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
              <a href="#">/</a>
            </li>
            <li>
              <a href="login.html" class="sign-in"><i class="fa fa-sign-in"></i> Login </a>
            </li>
            <li>
              <a href="login.html" class="sign-in"><i class="fa fa-user"></i> Register</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- Top header end -->

    <!-- main header start -->
    <header class="main-header do-sticky" id="main-header-2">
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
                                    <a class="nav-link dropdown-toggle" href="{{route('contactus')}}" id="navbarDropdown10"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        Contact Us
                                    </a>
                                </li>
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

    <!-- Banner start -->
    <div class="banner" id="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/banner-01.jpg" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                        <div class="carousel-content container">
                            <div class="text-c">
                                <h1 data-animation="animated fadeInDown delay-05s">EXPERTISE IN CUSTOMIZE SOLUTION</h1>
                                <p data-animation="animated fadeInUp delay-10s">We'll turn your idea into a market-leading gem.</p>
                                <a data-animation="animated fadeInUp delay-10s" href="{{route('contactus')}}"
                                    class="btn btn-lg btn-round btn-theme">Get Started Now</a>
                                <!--<a data-animation="animated fadeInUp delay-10s" href="#"
                                    class="btn btn-lg btn-round btn-white-lg-outline">Free Download</a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/banner-02.jpg" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                        <div class="carousel-content container">
                            <div class="text-l">
                                <h1 data-animation="animated fadeInDown delay-05s">Best Optimized Responsive Website</h1>
                                <p data-animation="animated fadeInUp delay-10s">
                                    Striving to make digital technology a more beautiful tool for every business and
                                    individuals
                                    .</p>
                                <a data-animation="animated fadeInUp delay-10s" href="{{route('contactus')}}"
                                    class="btn btn-lg btn-round btn-theme">Get Started Now</a>
                                <!--<a data-animation="animated fadeInUp delay-10s" href="#"
                                    class="btn btn-lg btn-round btn-white-lg-outline">Free Download</a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/banner-03.jpg" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                        <div class="carousel-content container">
                            <div class="text-r">
                                <h1 data-animation="animated fadeInDown delay-05s">Enterprise Software Development</h1>
                                <p data-animation="animated fadeInUp delay-10s">Enhancing business agility and
                                    efficiency with cutting-edge web and mobile solutions.</p>
                                <a data-animation="animated fadeInUp delay-10s" href="{{route('contactus')}}"
                                    class="btn btn-lg btn-round btn-theme">Let's Discuss your Project</a>
                                <!--<a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-lg btn-round btn-white-lg-outline">Free Download</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="slider-mover-left" aria-hidden="true">
                    <i class="fa fa-angle-left"></i>
                </span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="slider-mover-right" aria-hidden="true">
                    <i class="fa fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>
    <!-- banner end -->

    <!-- Banner start --
    <div class="banner" id="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="extra/banner-1.jpg" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100">
                        <div class="carousel-content container">
                            <div class="text-l">
                                <div data-animation="animated fadeInDown delay-05s" class="banner-text">EXPERTISE
                                    <span>IN</span> <br> CUSTOMIZE SOLUTION</div>
                                <div class="head-banner">
                                    <div class="b-item">
                                        <div class="b-image"><img src="images/code.png" alt=""></div>
                                        <div class="b-text">Core PHP</div>
                                    </div>
                                </div>
                                <!--
                <p data-animation="animated fadeInUp delay-10s">This is business website template based on Bootstrap 4
                  framework.</p>--
                                <a data-animation="animated fadeInUp delay-10s" href="#"
                                    class="btn btn-lg btn-round btn-theme">Services</a>
                                <!--<a data-animation="animated fadeInUp delay-10s" href="#"
                  class="btn btn-lg btn-round btn-white-lg-outline">Free Download</a>--
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/banner-2.jpg" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100">
                        <div class="carousel-content container">
                            <div class="text-r">
                                <h1 data-animation="animated fadeInDown delay-05s">BEST OPTIMIZED RESPONSIVE WEBSITES
                                </h1>
                                <p data-animation="animated fadeInUp delay-10s">This is business website template based
                                    on Bootstrap 4
                                    framework.</p>
                                <a data-animation="animated fadeInUp delay-10s" href="#"
                                    class="btn btn-lg btn-round btn-theme">Get
                                    Started Now</a>
                                <a data-animation="animated fadeInUp delay-10s" href="#"
                                    class="btn btn-lg btn-round btn-white-lg-outline">Free Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/banner-3.jpg" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100">
                        <div class="carousel-content container">
                            <div class="text-c">
                                <h1 data-animation="animated fadeInDown delay-05s">Grow Your Business</h1>
                                <p data-animation="animated fadeInUp delay-10s">This is business website template based
                                    on Bootstrap 4
                                    framework.</p>
                                <a data-animation="animated fadeInUp delay-10s" href="#"
                                    class="btn btn-lg btn-round btn-theme">Get
                                    Started Now</a>
                                <a data-animation="animated fadeInUp delay-10s" href="#"
                                    class="btn btn-lg btn-round btn-white-lg-outline">Free Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="slider-mover-left" aria-hidden="true">
                    <i class="fa fa-angle-left"></i>
                </span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="slider-mover-right" aria-hidden="true">
                    <i class="fa fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>
    <!-- banner end -->

    <!-- Managment area start -->
    <div class="managment-area-2 content-area-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="managment-info">
                        <h1><span>Why</span> Choose Us?</h1>
                        <div class="managment-border-"></div>
                        <p>Our objective is to provide you with the best value. We bring high-level expertise on-site to
                            you with long- term commitment and in-depth knowledge of your business, tailoring specific
                            guidance to the way your organization uses technology. We have the right level relevant
                            competence and subject matter expertise/specialization in key areas of the business.</p>
                        <ul>
                            <li><i class="flaticon-up-arrow"></i>Deep Customization Process</li>
                            <li><i class="flaticon-building"></i>Industry Specialization</li>
                            <li><i class="flaticon-three"></i>Unique Sales Methodoligies</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 offset-lg-1">
                    <div class="managment-slider">
                        <div id="carouselExampleIndicators-managment" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators-managment" data-slide-to="0" class="active">
                                </li>
                                <li data-target="#carouselExampleIndicators-managment" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators-managment" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 img-fluid" src="images/managment1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 img-fluid" src="images/managment2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 img-fluid" src="images/managment3.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Managment area end -->

    <!-- Share details start -->
    <div class="share-detail  overview-bgi"
        style="background: rgba(0, 0, 0, 0.04) url(images/test.jpg) top left repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-inner">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="share-message">
                                    <div class="lead">Our software development company will transcend your business to
                                        the
                                        next level</div>
                                    <div class="base">We are a leading software development company that offers
                                        top-rated
                                        Software
                                        Development Services due to our vast experience, team of skilled professionals,
                                        key
                                        business insights, and a dedicated working process.</div>
                                </div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="share-form">
                                    <form class="text-center border border-light  pl-5 pr-5 pt-4 pb-4 mt-4 mb-4"
                                        action="#!">
                                        <p class="h4 mb-4">Sign up</p>
                                        <p>Looking for a software solution? Let’s talk</p>
                                        <!-- Full name -->
                                        <input type="text" class="form-control mb-4" placeholder="Full name">

                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <!-- E-mail -->
                                                <input type="email" class="form-control" placeholder="E-mail">
                                            </div>
                                            <div class="col">
                                                <!-- Phone-->
                                                <input type="text" class="form-control" placeholder="Phone">
                                            </div>
                                        </div>

                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <!-- Price -->
                                                <select name="price" id="price" class="form-control">
                                                    <option value="">Bellow 100,000</option>
                                                    <option value="">100,000 - 250,000</option>
                                                    <option value="">250,000 - 500,000</option>
                                                    <option value="">500,000 and more</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <!-- Software -->
                                                <select name="software" id="software" class="form-control">
                                                    <option value="">Mobile App</option>
                                                    <option value="">Web Development</option>
                                                    <option value="">Desktop Application</option>
                                                </select>
                                            </div>
                                        </div>
                                        <textarea name="" id="" class="form-control mb-4"></textarea>
                                        <!-- Sign up button -->
                                        <button class="btn my-4 btn-block btn-quote" type="submit">GET A QUOTE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Share details end -->

    <!-- Blog start -->
    <div class="blog content-area-2">
        <div class="container">
            <div class="main-title">
                <h1><span>Our</span> software development expertise</h1>
                <p>Check out some recent news posts.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-1">
                        <div class="blog-photo">
                            <img src="{{ asset('images/desktop.jpg') }}" alt="blog" class="img-fluid">
                        </div>
                        <div class="detail">
                            <!--<div class="date-box">
                                <span>27</span>Feb
                            </div>-->
                            <h3>
                                <a href="#">Desktop Application</a>
                            </h3>
                            <p>We provide both cross-platform as well as platform specific desktop application that
                                would translate your raw software idea into a money-making reality. Our desktop
                                application solutions are of unmatched quality which is enough to outdo any rival.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-1">
                        <div class="blog-photo">
                            <img src="{{ asset('images/responsive.jpg') }}" alt="blog" class="img-fluid">
                        </div>
                        <div class="detail">
                            <!--<div class="date-box">
                                <span>27</span>Feb
                            </div>-->
                            <h3>
                                <a href="{{route('webdevelop')}}">Web Development</a>
                            </h3>
                            <p>With the help of our highly qualified & experienced developers we deliver highly
                                customized web applications to our clients. We provide web applications of various types
                                such as CMS, eCommerce web portal, and enterprise web development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-1">
                        <div class="blog-photo">
                            <img src="{{ asset('images/mobile-app-platform-m.png') }}" alt="blog" class="img-fluid">
                        </div>
                        <div class="detail">
                            <!--<div class="date-box">
                                <span>27</span>Feb
                            </div>-->
                            <h3>
                                <a href="{{route('mobilepage')}}">Mobile App Development</a>
                            </h3>
                            <p>We are a way to go firm when it comes to mobile application development. We have
                                developed our expertise by delivering quality solutions over the past 7 years for
                                variety of businesses. Our mobile applications have had a great impact on our
                                clientele’s business.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-1">
                        <div class="blog-photo">
                            <img src="{{ asset('images/cloud-computing.png') }}" alt="blog" class="img-fluid">
                        </div>
                        <div class="detail">
                            <!--<div class="date-box">
                                <i class="fa fa-star"></i>
                            </div>-->
                            <h4>
                                <a href="#"></a>Cloud Consulting and DevOps</a>
                            </h4>
                            <p>We provide cloud & DevOps consultation to our clients that helps in automation and
                                standardization of the processes which in turn results in better operational efficiency,
                                faster innovation, and improved deployment quality.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-4">
                    <div class="blog-1">
                        <div class="blog-photo">
                            <img src="{{ asset('images/uiux.jpg') }}" alt="blog" class="img-fluid">
                        </div>
                        <div class="detail">
                            <!--<div class="date-box">
                                <i class="fa fa-star"></i>
                            </div>-->
                            <h3>
                                <a href="blog-single-sidebar-right.html">UI/UX Design</a>
                            </h3>
                            <p>We leverage on the power of information and research to find out specific solutions to
                                design problems</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog end -->

    <!-- Technologies start -->
    <div class="technology" style="background: rgba(0, 0, 0, 0.04) url(images/test.jpg) top left repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <header class="tech-header">
                        <h1>Technologies</h1>
                    </header>
                </div>
                <div class="col-lg-12 row">
                    <div class="col-lg-3 col-md-6">
                        <div class="avatar">
                            <img src="{{ asset('images/techimg1.png') }}" class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="avatar">
                            <img src="{{ asset('images/techimg2.png') }}" alt="avatar-2" class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="avatar">
                            <img src="{{ asset('images/techimg3.png') }}" alt="avatar-2" class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="avatar">
                            <img src="{{ asset('images/techimg4.png') }}" alt="avatar-2" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 row tech-text">
                    <div class="col-lg-3 col-md-6">Backend and desktop</div>
                    <div class="col-lg-3 col-md-6">Mobile</div>
                    <div class="col-lg-3 col-md-6">Frontend</div>
                    <div class="col-lg-3 col-md-6">Databases</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Technologies end -->

    <!-- Next Step Info -->
    <div class="managment-area-2 content-area-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="managment-info">
                        <h1>Take the next step for your business with <span>top-quality software</span> development</h1>
                        <div class="managment-border-"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 offset-lg-1">
                    <div class="managment-slider">
                        <div id="carouselExampleIndicators-managment" class="carousel slide" data-ride="carousel">
                                <div>Custom software can be used for such company-specific solutions as internal process automation and support for key business processes. Examples include applications used to manage content, inventory, communication with customers, and human resources processes. A tailored approach is often used at companies undergoing a digital transformation. A careful examination of the business needs is followed by the creation of custom software that can improve the overall efficiency, bring down costs, and boost business growth. </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Next Step Info end -->

    <!-- Testimonial 1 start
    <div class="testimonial-1 overview-bgi"
        style="background: rgba(0, 0, 0, 0.04) url(images/test.jpg) top left repeat;">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8">
                    <div class="testimonial-inner">
                        <header class="testimonia-header">
                            <h1><span>Our</span> Testimonial</h1>
                        </header>
                        <div id="carouselExampleIndicators7" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                            <div class="avatar">
                                                <img src="assets/img/avatar/avatar-2.jpg" alt="avatar-2"
                                                    class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                            <p class="lead">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in
                                                pulvinar neque. Nulla
                                                finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere
                                                sapien vitae.
                                            </p>
                                            <div class="author-name">
                                                Emma Connor
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star-half-full"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                            <div class="avatar">
                                                <img src="assets/img/avatar/avatar.jpg" alt="avatar"
                                                    class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                            <p class="lead">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in
                                                pulvinar neque. Nulla
                                                finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere
                                                sapien vitae.
                                            </p>
                                            <div class="author-name">
                                                Martin Smith
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star-half-full"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                            <div class="avatar">
                                                <img src="assets/img/avatar/avatar-3.jpg" alt="avatar-3"
                                                    class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                            <p class="lead">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in
                                                pulvinar neque. Nulla
                                                finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere
                                                sapien vitae.
                                            </p>
                                            <div class="author-name">
                                                John Antony
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star-half-full"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleIndicators7" role="button"
                                data-slide="prev">
                                <span class="slider-mover-left" aria-hidden="true">
                                    <i class="fa fa-angle-left"></i>
                                </span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators7" role="button"
                                data-slide="next">
                                <span class="slider-mover-right" aria-hidden="true">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     Testimonial 1 end -->


    <!-- services start
    <div class="services content-area-2 bg-grea">
        <div class="container">
            <div class="main-title">
                <h1><span>Our</span> software development expertise</h1>
                <!--<p>Explore some of the best business from around the world from our partners and friends.</p>--
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="media services-info">
                        <i class="flaticon-up-arrow"></i>
                        <div class="media-body">
                            <h5>Consultative Training</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="media services-info">
                        <i class="flaticon-commerce"></i>
                        <div class="media-body">
                            <h5>High Performance Selling</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="media services-info">
                        <i class="flaticon-graphic"></i>
                        <div class="media-body">
                            <h5>Sales Coaching Training</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="media services-info">
                        <i class="flaticon-social"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Advisor Program</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="media services-info">
                        <i class="flaticon-connection-1"></i>
                        <div class="media-body">
                            <h5>Selling With Insights</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="media services-info">
                        <i class="flaticon-commerce-1"></i>
                        <div class="media-body">
                            <h5>Online Marketing</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services end -->

    <!-- Testimonial 1 start -->
    <div class="testimonial-1 overview-bgi"
        style="background: rgba(0, 0, 0, 0.04) url(images/test.jpg) top left repeat;">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8">
                    <div class="testimonial-inner">
                        <header class="testimonia-header">
                            <h1>WHAT OUR <span>CUSTOMERS</span> SAY ABOUT US</h1>
                        </header>
                        <div id="carouselExampleIndicators7" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                            <div class="avatar">
                                                <img src="{{ asset('images/avatar.png') }}" alt="avatar-2" class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                            <p class="lead">
                                                “ With Qhrome IT team we can be rest assured that they will deploy the
                                                solution that meet your needs ”
                                            </p>
                                            <div class="author-name">
                                                Busola, GM Rab Stitches
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                            <div class="avatar">
                                                <img src="{{ asset('images/avatar.png') }}" alt="avatar" class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                            <p class="lead">
                                                “ This team has proven capability in deploying solutions that have
                                                provided secure access to critical applications – from anywhere at Rab
                                                Stitches ”
                                            </p>
                                            <div class="author-name">
                                                Chris, Rab stitches PLC.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                            <div class="avatar">
                                                <img src="{{ asset('images/avatar.png') }}" alt="avatar-3" class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                            <p class="lead">
                                                “ They are an IT company focused on providing integrated, turnkey,
                                                technology solutions to the blue-chip sectors in Nigeria. They have
                                                revolutionized the way we work ”
                                            </p>
                                            <div class="author-name">
                                                Adeniran, Director IT, CLG Securities Nigeria.
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star-half-full"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                            <div class="avatar">
                                                <img src="extra/avatar.png" alt="avatar-3" class="img-fluid rounded">
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                            <p class="lead">
                                                “ I am proud of this team as a partner to Meristem ”
                                            </p>
                                            <div class="author-name">
                                                Kayode, MD Fatty Piin
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleIndicators7" role="button"
                                data-slide="prev">
                                <span class="slider-mover-left" aria-hidden="true">
                                    <i class="fa fa-angle-left"></i>
                                </span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators7" role="button"
                                data-slide="next">
                                <span class="slider-mover-right" aria-hidden="true">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial 1 end -->

    <!-- partner start -->
    <div class="container partner">
        <div class="row">
            <div class="multi-carousel" data-items="1,3,5,6" data-slide="1" id="multiCarousel" data-interval="1000">
                <div class="multi-carousel-inner">
                    <div class="item">
                        <div class="pad15">
                            <img src="{{ asset('images/brands/brand-1.png') }}" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img  src="{{ asset('images/brands/brand-2.png') }}" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img  src="{{ asset('images/brands/brand-3.png') }}" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img  src="{{ asset('images/brands/brand-4.png') }}" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img  src="{{ asset('images/brands/brand-1.png') }}" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img  src="{{ asset('images/brands/brand-2.png') }}" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img  src="{{ asset('images/brands/brand-3.png') }}" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img  src="{{ asset('images/brands/brand-4.png') }}" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img  src="{{ asset('images/brands/brand-1.png') }}" alt="brand">
                        </div>
                    </div>
                    <div class="item">
                        <div class="pad15">
                            <img  src="{{ asset('images/brands/brand-2.png') }}" alt="brand">
                        </div>
                    </div>
                </div>
                <a class="multi-carousel-indicator leftLst" aria-hidden="true">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="multi-carousel-indicator rightLst" aria-hidden="true">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- partner end -->

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
                    <div class="col-lg-4 col-md-6 contact-item"><a href="mailto:engage@qhromeit.com"><i class="fa fa-envelope"></i> engage@qhromeit.com</a>
                    </div>
                    <div class="col-lg-4 col-md-6 contact-item"><a href="tel:+2348034072526"><i class="fa fa-phone"></i> +2348034072526,
                        +353899432466</a></div>
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
                                <a href="{{route('aboutus')}}"><i class="fa fa-certificate"></i>How We Work</a>
                            </li>
                            <li>
                                <a href="{{route('aboutus')}}"><i class="fa fa-certificate"></i>Technology Expertise</a>
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
                                <a href="tel:+2348034072526"><i class="fa fa-phone"></i>+2348034072526, +353899432466</a>
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

    <!-- Off-canvas sidebar -->
    <div class="off-canvas-sidebar">
        <div class="off-canvas-sidebar-wrapper">
            <div class="off-canvas-header">
                <a class="close-offcanvas" href="#"><span class="fa fa-times"></span></a>
            </div>
            <div class="off-canvas-content">
                <aside class="canvas-widget">
                    <div class="logo text-center">
                        <img src="images/qhrome.png" alt="logo">
                        <!--<img src="assets/img/logos/logo-white.png" alt="logo">-->
                    </div>
                </aside>
                <aside class="canvas-widget">
                    <ul class="menu">
                        <li class="menu-item menu-item-has-children"><a href="{{route('homepage')}}">Home</a></li>
                        <li class="menu-item"><a href="{{route('aboutus')}}">About Us</a></li>
                        <li class="menu-item"><a href="portfolio-3column.html">Portfolio</a></li>
                        <li class="menu-item"><a href="services.html">Services</a></li>
                        <li class="menu-item"><a href="team.html">Team</a></li>
                        <li class="menu-item"><a href="{{route('contactus')}}">Contact US</a></li>
                    </ul>
                </aside>
                <aside class="canvas-widget">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>

<!-- External JS libraries
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
    <script src="assets/js/ie-emulation-modes-warning.js"></script>-->
    <!-- Custom JS Script
    <script src="js/app.js"></script>-->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            window.onload = function () {
                jQuery('#loader').fadeOut(5000, function () {
                    jQuery('#loader').remove();
                });
            }
        });
    </script>
</body>

</html>
