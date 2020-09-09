@extends('layouts.page')

@section('title', 'QHRME IT - Contact Us')


@section('page-banner')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi"
    style="background: rgba(0, 0, 0, 0.04) url(images/banner-about1.jpg) top left repeat;">
    <div class="container">
      <div class="breadcrumb-area">
        <h1>Contact Us</h1>
        <ul class="breadcrumbs">
          <li><a href="index.html">Home</a></li>
          <li class="active">Contact Us</li>
        </ul>
      </div>
    </div>
  </div>
<!-- Sub banner end -->
@endsection


@section('page-content')
<!-- Contact 1 start -->
<div class="contact-1 content-area-7">
    <div class="container">
        <div class="main-title">
            <h1><span>Contact</span> Us</h1>
            <p>We waited until we could do it right. Then we did! Instead of creating a carbon copy.</p>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-md-7">
                <form action="#" method="GET" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group name">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group email">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group number">
                                <input type="text" name="phone" class="form-control" placeholder="Number">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group message">
                                <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="send-btn">
                                <button type="submit" class="btn btn-color btn-md btn-message">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class=" offset-lg-1 col-lg-4 offset-md-0 col-md-5">
                <div class="contact-info">
                    <h3>Contact Info</h3>
                    <div class="media">
                        <i class="fa fa-map-marker"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Office Address</h5>
                            <!--<p>20/F Green Road, Dhanmondi, Dhaka</p>-->
                        </div>
                    </div>
                    <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Phone Number</h5>
                            <p>Office<a href="tel:+2348034072526">: +2348034072526, +353899432466</a> </p>
                            <p>Mobile<a href="tel:+353899432466">: +353899432466</a> </p>
                        </div>
                    </div>
                    <div class="media mrg-btn-0">
                        <i class="fa fa-envelope"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Email Address</h5>
                            <p><a href="mailto:engage@qhromeit.com">engage@qhromeit.com</a></p>
                            <p><a href="#">http://qhromeit.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact 1 end -->

<!-- Google map start -->
<div class="section">
    <div class="map">
        <div id="contactMap" class="contact-map"></div>
    </div>
</div>
<!-- Google map end -->
@endsection
