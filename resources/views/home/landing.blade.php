
@extends('home.master')

@section('title', 'Home')

@section('content')
    <div class="mb-0 banner-carousel banner-carousel-1">
        <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg1.jpg)">
        <div class="slider-content">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="text-center col-md-12">
                    <h2 class="slide-title" data-animation-in="slideInLeft">17 Years of excellence in</h2>
                    <h3 class="slide-sub-title" data-animation-in="slideInRight">Construction Industry</h3>
                    <p data-animation-in="slideInLeft" data-duration-in="1.2">
                        <a href="services.html" class="slider btn btn-primary">Our Services</a>
                        <a href="contact.html" class="border slider btn btn-primary">Contact Now</a>
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg2.jpg)">
      <div class="text-left slider-content">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12">
                  <h2 class="slide-title-box" data-animation-in="slideInDown">World Class Service</h2>
                  <h3 class="slide-title" data-animation-in="fadeIn">When Service Matters</h3>
                  <h3 class="slide-sub-title" data-animation-in="slideInLeft">Your Choice is Simple</h3>
                  <p data-animation-in="slideInRight">
                      <a href="services.html" class="border slider btn btn-primary">Our Services</a>
                  </p>
                </div>
            </div>
          </div>
      </div>
    </div>

    <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg3.jpg)">
      <div class="text-right slider-content">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12">
                  <h2 class="slide-title" data-animation-in="slideInDown">Meet Our Engineers</h2>
                  <h3 class="slide-sub-title" data-animation-in="fadeIn">We believe sustainability</h3>
                  <p class="slider-description lead" data-animation-in="slideInRight">We will deal with your failure that determines how you achieve success.</p>
                  <div data-animation-in="slideInLeft">
                      <a href="contact.html" class="slider btn btn-primary" aria-label="contact-with-us">Get Free Quote</a>
                      <a href="about.html" class="border slider btn btn-primary" aria-label="learn-more-about-us">Learn more</a>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>

  <section class="call-to-action-box no-padding">
    <div class="container">
      <div class="action-style-box">
          <div class="row align-items-center">
            <div class="text-center col-md-8 text-md-left">
                <div class="call-to-action-text">
                  <h3 class="action-title">We understand your needs on construction</h3>
                </div>
            </div><!-- Col end -->
            <div class="mt-3 text-center col-md-4 text-md-right mt-md-0">
                <div class="call-to-action-btn">
                  <a class="btn btn-dark" href="#">Request Quote</a>
                </div>
            </div><!-- col end -->
          </div><!-- row end -->
      </div><!-- Action style box -->
    </div><!-- Container end -->
  </section><!-- Action end -->

  <section id="ts-features" class="ts-features">
    <div class="container text-center">
      <div class="row justify-content-center">
          <div class="col-lg-6">
            <a href="" class="latest-post-img">
                <img loading="lazy" class="img-fluid w-75" src="images/PSA_LOGO.png" alt="img">
            </a>
          </div><!-- Col end -->

          <div class="mt-5 col-lg-6">
            <h3 class="text-center into-sub-title">MISSION</h3>
            <p class="text-center fs-1">To promote and maintain a community of responsible anesthesiologists who can practice safe and quality anesthesia care in the pursuit of serving the interests of its members, their patients and the nation.</p>

            <h3 class="pt-3 text-center into-sub-title">VISION</h3>
            <p class="text-center fs-1">A Society that envisions the Filipino anesthesiologists as world-class professionals pursuing the PSA Mission with a deep of fulfillment and pride.</p>

            <h3 class="pt-3 text-center into-sub-title">SHARED VALUES</h3>
            <p class="text-center fs-1">Commitment to Quality Care | Concern for Members | Professional Growth</p>


          </div><!-- Col end -->
      </div><!-- Row end -->
    </div><!-- Container end -->
  </section><!-- Feature are end -->

  <section id="news" class="project-area solid-bg">
    <div class="container">
        <div class="text-center row">
            <div class="col-12">
                <h2 class="section-title">Exciting Activites</h2>
                <h3 class="section-sub-title">UPCOMING EVENTS</h3>
            </div>
        </div>
      <!--/ Title row end -->
        <div class="container text-center">
            <div class="row justify-content-center g-0 " >
                <div class="col-sm-4 " >
                    <img loading="lazy" class="img-fluid w-75 zoom" style="width: 200px;" src="images/MIDYEAR_RATES_2024.png" alt="img">
                </div>
                <div class="col-sm-8 d-none d-sm-block">
                    <img loading="lazy" class="img-fluid w-200 " src="images/MIDYEAR_2024.png" alt="img">
                </div>
            </div>
        </div>
    <div>
    <!--/ Container end -->
  </section>


  @include('home.maps')

@endsection
