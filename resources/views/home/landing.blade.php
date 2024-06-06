
@extends('home.master')

@section('title', 'Home')

@section('content')
    <div class="mb-0 banner-carousel banner-carousel-1">
        <div class="banner-carousel-item" style="background-image:url(images/slider-main/slider1.jpg)">
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
    {{-- TESTING --}}
    <div class="banner-carousel-item" style="background-image:url(images/slider-main/slider2.jpg)">
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

    <div class="banner-carousel-item" style="background-image:url(images/slider-main/slider3.jpg)">
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
    <div class="container" >
      <div class="row justify-content-center">
          <div class="mt-5 col-lg-9">
            <h3 class=" into-sub-title">Dear All 23rd ACA 2023 Participants,</h3>
            <p class="hotel-p">
              <br>
              On behalf of the organizing committee of the 23rd ASEAN Congress of Anesthesiologists 2023 (ACA 2023) in conjunction with the 98th Annual Scientific Meeting of the Royal College of Anesthesiologists of Thailand, I would like to extend our heartfelt gratitude for your invaluable participation at the congress.
              <br>
              <br>
              The success of the 23rd ACA 2023 hinged on the commitment and unwavering support of individuals like you. Your active engagement, insightful contributions, and dedication to advancing the field of anesthesiology greatly enriched our event and left an indelible mark.
              Your presence not only contributed to the exchange of knowledge and ideas but also fostered meaningful connections within our community. The positive impact of your involvement will resonate long after the conference concludes, influencing the practice and progress of anesthesiology in our region.
              <br>
              <br>
              We sincerely appreciate the time and effort you invested in making ACA 2023 a resounding success. Your willingness to share your expertise and experiences played a pivotal role in enhancing the quality of our scientific discussions and workshops.
              <br>
              <br>
              As we reflect on the exceptional moments and learning opportunities that ACA 2023 provided, we are reminded of the collaborative spirit that defines our field. Your contributions have reinforced our belief in the power of collective knowledge and collaboration.
              <br>
              <br>
              Once again, thank you for your invaluable contribution to the 23rd ASEAN Congress of Anesthesiologists 2023. We look forward to the possibility of future collaborations and hope to continue our journey together in advancing the practice of anesthesiology.
              <br>
              <br>
              If you have any feedback or suggestions about the congress, please feel free to share them with us. Your insights are invaluable in helping us improve future events.
              Wishing you continued success in your endeavors, and we hope to meet again soon.
            </p>
            <h2>
              Warm regards,
              <br>
              23rd ACA 2023 Congress Organizing Committee
            </h2>
          </div><!-- Col end -->
      </div><!-- Row end -->
    </div><!-- Container end -->
  </section><!-- Feature are end -->

  <section id="news" class="project-area solid-bg">
    <div class="container">
      <div class="row">
          <div  class="col-lg-4" >
              <a class="gallery-popup " href="images/Ruenreong.jpg">
                <img loading="lazy" class="img-fluid w-75 zoom fade-img" src="images/Ruenreong.jpg" alt="img" style="box-shadow: 3px 3px 5px;"> 
            </a>
          </div>

          <div class="col-lg-8 mt-4 mt-lg-0">
            {{-- <h3 class="into-sub-title">Our Values</h3> --}}
            <p class="hotel-p">Dear All,
              <br>
              <br>
              As the President of the Royal College of Anesthesiologists of Thailand (RCAT), it is my great pleasure to graciously welcome you to our 23rd ASEAN Congress of Anesthesiologists (ACA2023). The ACA was established by the collaboration and cooperation of its members across ASEAN countries. The mission is to provide a forum for the anesthesiologists to have excellent opportunities to exchange their mutual interests and experiences and share current advanced knowledge in anesthesia, critical care and pain medicine.
              <br>
              <br>
              Since its inception, the ACA has held its scientific meeting regularly every two years. The meeting venue has been voluntarily rotated among the member countries. However, the effect of the global pandemic of the COVID-19 era has precluded only our on-site meetings, but our relationships remain. The situation is improving, and Thailand has the great opportunity to return our relationships by hosting this ACA2023.
              <br>
              <br>
              I would like to take this opportunity to humbly invite all of you to join this resuming scientific congress. I do hope our hosting of the ACA2023 will be a fruitful and appropriate platform for communication academically and socially among our members to share their valued and distinctive experiences.
              <br>
              <br>              
              Best wishes and kind regards,
            </p>


          </div><!-- Col end -->
      </div><!-- Row end -->
    </div>
    <hr class="solid" style="border-top: 2px solid #bbb;">
  </section>



  @include('home.maps')

@endsection
