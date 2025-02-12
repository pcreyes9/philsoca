
@extends('home.master')

@section('title', 'Home')

@section('content')
  <div class="banner-carousel banner-carousel-1">
    <div class="">
      <img class="imgSlide w-100 w-lg-75 " src="images/slider-main/ACA POSTER V8.png" alt="ASEAN CONGRESS OF ANESTHESIOLOGISTS">
    </div>
  </div>
  
  <section id="facts" class="facts-area mt-n4" style="background-color: #000066">
    <div class="container">
      <div class="facts-wrapper">
        <h3 class="section-sub-title mt-n4" style="color: white">Important Dates</h3>
          <div class="row">
            <div class="col-md-3 col-sm-6 ts-facts">
                <div class="ts-facts-img">
                </div>
                <div class="ts-facts-content">
                  <h1 class="ts-date mb-n4">Jan</h1>
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="20">0</span></h2>
                  <h3 class="ts-facts-title">Early Bird Registration Open</h3>
                </div>
            </div><!-- Col end -->
  
            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                <div class="ts-facts-img">
                </div>
                <div class="ts-facts-content">
                  <h1 class="ts-date mb-n4">Apr</h1>
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="30">0</span></h2>
                  <h3 class="ts-facts-title">Early Bird Registration Deadline</h3>
                </div>
            </div><!-- Col end -->
  
            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                <div class="ts-facts-img">
                </div>
                <div class="ts-facts-content">
                  <h1 class="ts-date mb-n4">Sept</h1>
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="30">0</span></h2>
                  <h3 class="ts-facts-title">Registration Deadline</h3>
                </div>
            </div><!-- Col end -->
  
            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                <div class="ts-facts-img">
                </div>
                <div class="ts-facts-content">
                  <h1 class="ts-date mb-n4">Oct</h1>
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="23">0</span>-<span class="counterUp" data-count="25">0</span></h2>
                  <h3 class="ts-facts-title">ACA 2025 MANILA</h3>
                </div>
            </div><!-- Col end -->
  
          </div> <!-- Facts end -->
      </div>
      <!--/ Content row end -->
    </div>
    <!--/ Container end -->
  </section><!-- Facts end -->
  {{-- <section id="ts-features" class="ts-features">
    <div class="container" >
      <div class="row justify-content-center">
        <div class="col-lg-9 upSlide" >
          <h3 class=" into-sub-title" >Dear All 24th ACA 2025 Participants,</h3>
          <p class="hotel-p">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper nunc nec ornare ornare. Nam sagittis elit ac ligula bibendum condimentum. In sodales, neque et tincidunt congue, lorem dui interdum arcu, id lobortis tortor nibh quis magna. Pellentesque sit amet semper turpis, non feugiat tellus. Duis malesuada nibh nec suscipit volutpat. 
            <br>
            <br>
            Phasellus ut enim id turpis euismod fermentum quis eu eros. Vestibulum rhoncus ante tellus, a iaculis turpis placerat eget. Fusce vel libero id est ullamcorper sagittis. Integer ullamcorper lacus non justo tincidunt porttitor. Duis ornare sollicitudin mi quis dignissim. Duis imperdiet justo nec tellus pellentesque, vel porta eros sodales. Etiam et convallis odio. Mauris interdum tortor augue, in dictum leo congue eu. Morbi a mauris consectetur ipsum finibus ultricies.
            <br>
            <br>
            Nam ultricies est ac enim condimentum, id euismod ante porttitor. Nam bibendum cursus urna ac imperdiet. Cras semper, dolor fringilla molestie scelerisque, urna nulla consectetur justo, eu egestas urna ipsum quis purus. Pellentesque elementum in tellus eu volutpat. In sollicitudin est ex, eget pharetra risus scelerisque vitae. Sed dictum dolor nec mauris scelerisque efficitur sit amet vel quam. Nunc et rutrum est. Nunc tempor placerat diam, sit amet mattis eros semper nec.
          </p>
          <h2>
            Warm regards,
            <br>
            24th ACA 2025 Congress Organizing Committee
          </h2>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- <section id="news" class="project-area solid-bg">
    <div class="container">
      <div class="row ">
        <div  class="col-lg-4 text-center"  >
          <a class="gallery-popup wrapper" href="images/PSA President 2024.jpg">
            <img id="slide" class="img-fluid w-75 zoom fade-img" src="images/PSA President 2024.jpg" alt="img" style="box-shadow: 3px 3px 5px;"> 
          </a>
        </div>
        
        <div class="col-lg-8 mt-4 mt-lg-0">
          <p class="hotel-p">Dear All,
            <br>
            <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper nunc nec ornare ornare. Nam sagittis elit ac ligula bibendum condimentum. In sodales, neque et tincidunt congue, lorem dui interdum arcu, id lobortis tortor nibh quis magna. Pellentesque sit amet semper turpis, non feugiat tellus. Duis malesuada nibh nec suscipit volutpat. 
            <br>
            <br>
            Phasellus ut enim id turpis euismod fermentum quis eu eros. Vestibulum rhoncus ante tellus, a iaculis turpis placerat eget. Fusce vel libero id est ullamcorper sagittis. Integer ullamcorper lacus non justo tincidunt porttitor. Duis ornare sollicitudin mi quis dignissim. Duis imperdiet justo nec tellus pellentesque, vel porta eros sodales. Etiam et convallis odio. Mauris interdum tortor augue, in dictum leo congue eu. Morbi a mauris consectetur ipsum finibus ultricies.
            <br>
            <br>
            Nam ultricies est ac enim condimentum, id euismod ante porttitor. Nam bibendum cursus urna ac imperdiet. Cras semper, dolor fringilla molestie scelerisque, urna nulla consectetur justo, eu egestas urna ipsum quis purus. Pellentesque elementum in tellus eu volutpat. In sollicitudin est ex, eget pharetra risus scelerisque vitae. Sed dictum dolor nec mauris scelerisque efficitur sit amet vel quam. Nunc et rutrum est. Nunc tempor placerat diam, sit amet mattis eros semper nec.
            <br>
            <br>              
            Best wishes and kind regards,
            <br>
            <br>
            <strong>
              Peñafrancia C. Cano
              <br>
              President, Philippine Society of Anesthesiologists
            </strong>    
            
          </p>
        </div>
      </div>
    </div>
  </section> --}}
  {{-- <hr class="solid" style="border-top: 2px solid #bbb;"> --}}

  {{-- <div class = "d-none d-sm-block">
    @include('home.maps')
  </div>
  <script>
    var w = window.innerWidth;
    var h = window.innerHeight;
    
    var x = document.getElementById("demo");
    x.innerHTML = "Browser width: " + w + ", height: " + h + ".";
    </script> --}}
@endsection
