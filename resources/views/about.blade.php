@extends('layouts.page')

@section('title', 'QHRME IT - About Us')


@section('page-banner')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi"
    style="background: rgba(0, 0, 0, 0.04) url(images/banner-about1.jpg) top left repeat;">
    <div class="container">
      <div class="breadcrumb-area">
        <h1>About Us</h1>
        <ul class="breadcrumbs">
          <li><a href="index.html">Home</a></li>
          <li class="active">About Us</li>
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
        <div class="col-lg-5 col-md-5">
          <div class="managment-info">
            <h1><span>Why</span> Choose Us?</h1>
            <div class="managment-border-"></div>
            <p class="myabout">Qhrome IT (QIT) is a company leading the revolutionary approach to Information
              Communication Technology
              (ICT) by redefining and reimagining strategic approach to solutions and services delivery.
              We are focused on the provision of Information Technology Solutions and Services that are built on a
              world-class, secure, resilient infrastructure, delivered according to global best practices in partnership
              with the world’s leading technology vendors.</p>
            <p>Our objective is to provide you with the best value. We bring high-level expertise on-site to you with
              long- term
              commitment and in-depth knowledge of your business, tailoring specific guidance to the way your
              organization uses
              technology. We have the right level relevant competence and subject matter expertise/specialization in key
              areas
              of the business.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-7 offset-lg-1">
          <div class="managment-slider">
            <div id="carouselExampleIndicators-managment" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators-managment" data-slide-to="0" class="active"></li>
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
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <p>We seek to contribute to the advancement of the global digital economy the world over. In the next 20
            years, we
            will take advantage of the abundant market opportunities in Africa to challenge other global players. We are
            constantly seeking to deliver quality, timely and innovative solutions with high professionalism,
            continually
            maintaining many steps ahead of the competition.</p>
          <p>In partnership with our customers, we will empower them with acute solutions to enable them to achieve
            their
            aspirations and be winners in their marketplace. We will be proactive, responsive, and customer- friendly
            and
            focused, realizing that people are ultimate beneficiaries of our technology. Our name will be recognized and
            respected, being synonymous with quality and innovation.</p>
          <p></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Managment area end -->
@endsection