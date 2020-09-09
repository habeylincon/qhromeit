@extends('layouts.page')

@section('title', 'QHRME IT - Mobile Application')


@section('page-banner')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi"
    style="background: rgba(0, 0, 0, 0.04) url(images/banner-about1.jpg) top left repeat;">
    <div class="container">
      <div class="breadcrumb-area">
        <h1>Mobile Application Development Services</h1>
        <ul class="breadcrumbs">
          <li><a href="index.html">Home</a></li>
          <li class="active">Mobile Application</li>
        </ul>
      </div>
    </div>
  </div>
<!-- Sub banner end -->
@endsection

@section('page-content')
 <!-- Managment area start -->
 <div class="managment-area-2 content-area-8">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-5">
          <div class="managment-info">
            <h1>Reach your <span>Mobile Audience</span></h1>
            <div class="managment-border-"></div>
            <p class="myabout">From initial ideation to final product design, our mobile app developers provide custom mobile applications that satisfy your criteria and help your business stay connected. We’ve been creating mobile apps for clients in almost every industry, from medical to manufacturing to marketing.</p>
            <p>With the level of innovation and quality we put into every one of our apps, we can strengthen the relationship with your on-the-go customer and improve overall user experience on their mobile devices.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-7">
            <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="{{ asset('images/mobile-audience.jpg') }}" alt="First slide">
              </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Managment area end -->

   <!-- Managment area start -->
   <div class="managment-area-2 content-area-8 audience">
    <div class="container">
      <div class="row">        
        <div class="col-lg-6 col-md-7">
            <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="images/mobile.jpg" alt="First slide">
              </div>
        </div>
        <div class="col-lg-6 col-md-5">
            <div class="managment-info">
              <h1><span>Mobile Solutions</span> That Fit Your <span> Enterprise</span></h1>
              <div class="managment-border-"></div>
              <p class="myabout">Mobile business solutions for the mobile enterprise.</p>
              <p>Add mobile capabilities and reap the benefits of a connected infrastructure and platform. With your system requirements in mind, we develop custom backend, middleware and frontend mobile solutions. Your team of Intetics developers will help choose technologies and service solutions that make sense for you and your enterprise..</p>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!-- Managment area end -->

  @endsection