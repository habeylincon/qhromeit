@extends('layouts.page')

@section('title', 'QHRME IT - Custom Web')


@section('page-banner')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi"
    style="background: rgba(0, 0, 0, 0.04) url(images/banner-about1.jpg) top left repeat;">
    <div class="container">
      <div class="breadcrumb-area">
        <h1>Web Development</h1>
        <ul class="breadcrumbs">
          <li><a href="index.html">Home</a></li>
          <li class="active">Web Development</li>
        </ul>
      </div>
    </div>
  </div>
<!-- Sub banner end -->
@endsection




@section('page-content')
<!-- services start -->
<div class="services content-area-2">
    <div class="container">
      <div class="main-title">
        <h1><span>Our</span> Service</h1>
        <p>Whether you are looking for a beautiful marketing site or a custom web-based software application, we have
          you covered with our high-quality web development services.</p>
        <p>We prototype, design, build and launch digital experiences for all devices (mobile and desktop) and aspect
          ratios.</p>
        <p>Our team utilizes the latest technology, including Laravel-based REST API and full stack JavaScript, to build
          websites that attract, engage, and convert your particular audience.</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="media services-info">
            <i class="flaticon-up-arrow"></i>
            <div class="media-body">
              <h5>Web-design</h5>
              <p>We can build a new website for your business from scratch, or give a much-needed modernization update
                to your current website</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="media services-info">
            <i class="flaticon-commerce"></i>
            <div class="media-body">
              <h5>MVP and proof of concept</h5>
              <p>We can help you kick off new digital product concepts through counseling, workshops, and active
                prototype development</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="media services-info">
            <i class="flaticon-graphic"></i>
            <div class="media-body">
              <h5>E-commerce websites</h5>
              <p>We stay abreast of all the latest e-commerce trends in the industry, customizing your shopping portal
                for maximum business benefit</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="media services-info">
            <i class="flaticon-social"></i>
            <div class="media-body">
              <h5 class="mt-0">Payment systems integration</h5>
              <p>New payment services can be integrated into your website to increase speed and convenience</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="media services-info">
            <i class="flaticon-connection-1"></i>
            <div class="media-body">
              <h5>UI/UX design</h5>
              <p>We deliver UI and UX services following all established design standards, workflows, and guidelines</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="media services-info">
            <i class="flaticon-commerce-1"></i>
            <div class="media-body">
              <h5>Content migration & import</h5>
              <p>Integrate existing content into your new website to save money and maximize the value of your digital
                assets</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- services end -->

  <!-- Development Process start -->
  <div class="services content-area-2">
    <div class="container">
      <div class="main-title">
        <h1><span>Web Design</span> & Development Process</h1>
        <p>We deliver state-of-the-art websites by using Agile methodology to ensure project consistency and
          completeness. The overall development process is divided into stages that last two weeks. At the end of each
          stage, we deliver a report on our progress and explain the plan for what comes next..</p>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <img src="{{ asset('images/process.png') }}" alt="" class="img-fluid">
        </div>
      </div>
      <!--<div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="media services-info">
            <i class="flaticon-up-arrow"></i>
            <div class="media-body">
              <h5>Web-design</h5>
              <p>We can build a new website for your business from scratch, or give a much-needed modernization update
                to your current website</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="media services-info">
            <i class="flaticon-commerce"></i>
            <div class="media-body">
              <h5>MVP and proof of concept</h5>
              <p>We can help you kick off new digital product concepts through counseling, workshops, and active
                prototype development</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="media services-info">
            <i class="flaticon-graphic"></i>
            <div class="media-body">
              <h5>E-commerce websites</h5>
              <p>We stay abreast of all the latest e-commerce trends in the industry, customizing your shopping portal
                for maximum business benefit</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="media services-info">
            <i class="flaticon-social"></i>
            <div class="media-body">
              <h5 class="mt-0">Payment systems integration</h5>
              <p>New payment services can be integrated into your website to increase speed and convenience</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="media services-info">
            <i class="flaticon-connection-1"></i>
            <div class="media-body">
              <h5>UI/UX design</h5>
              <p>We deliver UI and UX services following all established design standards, workflows, and guidelines</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="media services-info">
            <i class="flaticon-commerce-1"></i>
            <div class="media-body">
              <h5>Content migration & import</h5>
              <p>Integrate existing content into your new website to save money and maximize the value of your digital
                assets</p>
            </div>
          </div>
        </div>
      </div>-->
    </div>
  </div>
  <!-- Development Process end -->

  <!-- Development Process start -->
  <div class="services content-area-2">
    <div class="container">
      <div class="main-title">
        <h1><span>Let’s Get</span> Started</h1>
        <p>If you are ready to launch a next-generation web experience, please fill out the contact form, and our
          consultants will get in touch with you within the next 24 hours.</p>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <form class="text-center border border-light  pl-5 pr-5 pt-4 pb-4 mt-4 mb-4" action="#!">
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

            <input type="text" class="form-control mb-4" placeholder="Company">

            <textarea placeholder="How can we help you?" name="" id="" class="form-control mb-4"></textarea>
            <input type="file" class="form-control" placeholder="Attach a File up to 10MB">
            <!-- Sign up button -->
            <button class="btn my-4 btn-block btn-quote" type="submit">Send</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- Development Process end -->

@endsection