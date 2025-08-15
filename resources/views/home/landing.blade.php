
@extends('home.master')

@section('title', 'Home')

@section('content')
  <div class="banner-carousel banner-carousel-1">
    <div class="">
      <img class="imgSlide w-100 w-lg-75 " src="images/slider-main/ACA POSTER resized.png?v={{ time() }}" alt="ASEAN CONGRESS OF ANESTHESIOLOGISTS">
    </div>
  </div>
  {{-- style="background-color: #000066" --}}

  {{-- <div class="row d-flex justify-content-center align-middle">
    <div class="col-md-6 col-12 col-lg-6 mt-3">
      <img loading="lazy" class="img-fluid w-100 rounded imgSlide" src="images/ACA_LOGO_non.png" alt="img">
    </div>
    <div class="col-md-6 col-12 col-lg-6 mt-3 d-flex align-items-center justify-content-center">
      <img loading="lazy" class="img-fluid w-100 rounded imgSlide" src="images/ACA_LOGO_non.png" alt="img">
      <div class="text-center">
        <h3 class="master-title">The 24th ASEAN Congress of Anesthesiologists</h3> 
        <h3 class="master-sub-text mt-n4">in association with</h3>
        <h3 class="master-title">The 57th Annual Convention and Postgraduate Course of the Philippine Society of Anesthesiologists</h3> 
        <h3 class="section-sub-title">Shaping the Future of Anesthesia in Peroperative Care</h3>
      </div>
      
    </div>
  </div> --}}
  
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

  <section id="news" class="project-area">
    <h3 class="section-sub-title text-center">MESSAGE FROM THE PRESIDENT OF THE <br> CONFEDERATION OF ASEAN SOCIETIES OF ANESTHESIOLOGISTS (CASA) <br> and Chair of the 24<sup>th</sup> ASEAN CONGRESS OF ANESTHESIOLOGISTS (ACA)
    </h3>
    <div class="container">
        
      <div class="row ">
        <div class="col-lg-4 d-flex justify-content-center align-items-start">
          <a class="gallery-popup wrapper d-flex justify-content-center" href="images/PSA President 2024 1.jpg">
            <img id="slide" 
                class="zoom fade-img img-fluid img-custom-width" 
                src="images/PSA President 2024 1.jpg?v={{ time() }}" 
                alt="img" 
                style="box-shadow: 3px 3px 5px;">
          </a>
        </div>
        
        <div class="col-lg-8 mt-4 mt-lg-0">
          <p class="hotel-p">Dear Esteemed Colleagues,  
            <br>
            <br>
            On behalf of the organizing committee, it is my great pleasure to welcome you to the 24<sup>th</sup> <strong>ASEAN Congress 
              of Anesthesiologists (ACA)</strong> which will be held in association with the 57<sup>th</sup> Annual Convention and Post 
            Graduate Course of the Philippine Society of Anesthesiologists (PSA). This event will take place at the 
            Newport City, an upscale and vibrant complex in Metro Manila.
            <br>
            <br>
            The ACA is a biennial event which unites anesthesiologists from all 10 ASEAN member nations. It is a 
            momentous occasion for sharing knowledge, exchanging ideas, and fostering collaboration and friendship 
            across the region. 
            <br>
            <br>
            This year's Congress with the theme “Shaping the Future of Anesthesia in Perioperative Care” reflects the 
            growing importance of perioperative medicine and the integral role of Anesthesiologists in optimizing 
            patient outcomes before, during, and after surgery. From advancements in anesthetic techniques to enhanced 
            patient monitoring and personalized care strategies, there is so much to learn and discuss. 
            <br>
            <br>
            Participants will 
            have the chance to engage with international speakers who are all experts in the field, as well as with Asian 
            colleagues and take part in cutting-edge discussions.  The comprehensive scientific program that spans the 
            latest research, clinical application, and future trends will further deepen one’s understanding and knowledge 
            of the practice of Anesthesiology. 
            <br>
            <br>              
            We look forward to welcoming you in Manila! 
            <br>
            <br>
            <strong>
              Peñafrancia C. Cano, MD, DPBA, FPSA 
            </strong>   
            <br>
            President
            <br>
            <span style="letter-spacing: 0.5px; text-align: left;">Confederation of ASEAN Societies of Anesthesiologists (CASA) </span>
            
            <br>
            Chair of Organizing Committee
            <br>
            24th ASEAN Congress of Anesthesiologists
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="news" class="project-area">
    <div class="container">
        <h3 class="section-sub-title text-center">Welcome Message from the President of the <br>  Philippine Society of Anesthesiologists
        </h3>
      <div class="row ">
        <div class="col-lg-4 d-flex justify-content-center align-items-start">
          <a class="gallery-popup wrapper d-flex justify-content-center" href="images/Dr Francis B Mayuga_PSA President.png?v={{ time() }}">
            <img id="slide" 
                class="zoom fade-img img-fluid img-custom-width" 
                src="images/Dr Francis B Mayuga_PSA President.png?v={{ time() }}" 
                alt="img" 
                style="box-shadow: 3px 3px 5px;">
          </a>
        </div>
        
        <div class="col-lg-8 mt-4 mt-lg-0">
          <p class="hotel-p">Dear Distinguished Delegates,  
            <br>
            <br>
            It is with immense pride and joy that I welcome you to the 24<sup>th</sup> ASEAN Congress of Anesthesiologists, held in conjunction with the 57<sup>th</sup> Annual Convention and Postgraduate Course of the Philippine Society of Anesthesiologists. We are thrilled to host you in the beautiful Philippines from October 23-25, as we gather under the inspiring theme: "Shaping the Future of Anesthesia in Perioperative Care."
            <br>
            <br>
            This congress marks a significant occasion for us all, as it brings together anesthesiologists, clinicians, researchers, and educators from across the ASEAN region and beyond. The exchange of knowledge and ideas is vital in our ever-evolving field, and I am confident that the discussions and interactions over the next few days will ignite new insights and collaborations that will propel us forward. 
            <br>
            <br>
            Our theme this year, "Shaping the Future of Anesthesia in Perioperative Care," underscores our commitment to enhancing patient safety and outcomes throughout the surgical journey. As we know, the perioperative period is critical, not only for the surgical procedure itself but also for ensuring comprehensive care before and after the operation. Our goal is to explore innovative practices, integrate the latest research findings, and share experiences that will enable us to elevate our standards of care.
            <br>
            <br>  
            The program we have curated for you is robust and diverse, featuring renowned speakers who are leaders in their fields. You can look forward to keynote presentations that will challenge our perspectives, insightful panel discussions that will delve into pressing issues, and hands-on workshops that will enhance your practical skills. Each session is designed to provide you with valuable knowledge and tools that you can apply in your practice.
            <br>
            <br> 
            Moreover, we have dedicated time for networking and collaboration, recognizing that the relationships we build during this congress are just as important as the knowledge we gain. I encourage you to engage with fellow delegates, share your experiences, and forge connections that will last well beyond this event. Together, we can support each other in our common mission to improve the quality of anesthesia care across our region.
            <br>
            <br> 
            The Philippines, with its rich culture, diverse landscapes, and warm hospitality, offers a perfect setting for this congress. I invite you to take some time to explore our beautiful country, indulge in our local cuisine, and experience the warmth of our people. We are not just here to learn; we are also here to create lasting memories.
            <br>
            <br>
            As we embark on this journey together, I want to express my heartfelt gratitude to each of you for your commitment to the field of anesthesiology. Your dedication to patient care, education, and continuous improvement is what drives our profession forward. Let us seize this opportunity to inspire one another, share our knowledge, and shape the future of anesthesia in perioperative care.
            <br>
            <br>
            Once again, welcome to the Philippines! Let us make this congress a remarkable and transformative experience.
            <br>
            <br>
            Warmest regards,
            <br>
            <br>
            <strong>
              Francis B. Mayuga MD, MHA, DPBA, FPSA
            </strong>   
              <br>
              President
              <br>
              Philippine Society of Anesthesiologists, Inc.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section id="facts" class="facts-area mt-n4" >
    <div class="container">
      <div class="facts-wrapper">
        <h3 style="font-size: 35px;" class="section-sub-title mt-n4 text-center mt-3">Important Dates</h3>
          <div class="row d-flex justify-content-center">
            {{-- <div class="col-md-4 col-lg-3 col-6 ts-facts mt-3" >
                <div class="ts-facts-img">
                </div>
                <div class="ts-facts-content rounded-3 p-2" style="background-color: #0b6e4f">
                  <h1 class="ts-date mb-n4">Jan</h1>
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="20">20</span></h2>
                  <h3 class="ts-facts-title" style="color: #fff">Early Bird Registration Open</h3>
                </div>
            </div><!-- Col end --> --}}
  
            <div class="col-md-4 col-lg-3 col-6 ts-facts mt-3">
                <div class="ts-facts-img">
                </div>
                <div class="ts-facts-content rounded-3 p-2" style="background-color: #0b6e4f">
                  <h1 class="ts-date mb-n4">Apr</h1>
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="30">30</span></h2>
                  <h3 class="ts-facts-title">Early Bird Registration Deadline</h3>
                </div>
            </div><!-- Col end -->

            <div class="col-md-4 col-lg-3 col-6 ts-facts mt-3" >
                <div class="ts-facts-img">
                </div>
                <div class="ts-facts-content rounded-3 p-2" style="background-color: #0b6e4f">
                  <h1 class="ts-date mb-n4">Jul</h1>
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="30">30</span></h2>
                  <h3 class="ts-facts-title" style="color: #fff">Abstract submission deadline</h3>
                </div>
            </div><!-- Col end -->

            <div class="col-md-4 col-lg-3 col-6 ts-facts mt-3">
                <div class="ts-facts-img">
                </div>
                <div class="ts-facts-content rounded-3 p-2" style="background-color: #0b6e4f">
                  <h1 class="ts-date mb-n4">Aug</h1>
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="22">22</span></h2>
                  <h3 class="ts-facts-title">Notification of acceptance</h3>
                </div>
            </div><!-- Col end -->

            <div class="col-md-4 col-lg-3 col-6 ts-facts mt-3">
              <div class="ts-facts-img">
              </div>
              <div class="ts-facts-content rounded-3 p-2 " style="background-color: #0b6e4f">
                <h1 class="ts-date mb-n4">Sept</h1>
                <h2 class="ts-facts-num"><span class="counterUp" data-count="30">30</span></h2>
                <h3 class="ts-facts-title" style="font-size: 14px;">Registration deadline for abstract presenting authors</h3>
              </div>
          </div><!-- Col end -->
  
            <div class="col-md-4 col-lg-3 col-6 ts-facts mt-3">
                <div class="ts-facts-img">
                </div>
                <div class="ts-facts-content rounded-3 p-2 " style="background-color: #0b6e4f">
                  <h1 class="ts-date mb-n4">Oct</h1>
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="10">10</span></h2>
                  <h3 class="ts-facts-title">Regular Registration Deadline</h3>
                </div>
            </div><!-- Col end -->
  
            <div class="col-md-4 col-lg-3 col-6 ts-facts mt-3">
                <div class="ts-facts-img">
                </div>
                <div class="ts-facts-content rounded-3 p-2 pb-4" style="background-color: #0b6e4f">
                  <h1 class="ts-date mb-n4">Oct</h1>
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="23">23</span>-<span class="counterUp" data-count="25">25</span></h2>
                  <h3 class="ts-facts-title">ACA 2025 MANILA</h3>
                </div>
            </div><!-- Col end -->
  
          </div> <!-- row end -->
      </div>
      <!--/ Content row end -->
    </div>
    <!--/ Container end -->
  </section><!-- Facts end -->
  {{-- <hr class="solid" style="border-top: 2px solid #bbb;">

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
