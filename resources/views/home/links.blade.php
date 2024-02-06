
@extends('home.master')

@section('title', 'Links')

@section('content')
    <div class="">
        <section id="ts-features" class="ts-features">
            <div class="container text-center">
              <div class="row justify-content-center">
                  <div class="col-lg-6">
                    <a class="gallery-popup" href="images/links/link1.png">
                        <img loading="lazy" class="img-fluid"  src="images/links/link1.png" alt="img">
                    </a>
                    <a class="gallery-popup" href="images/links/linke2.jpg">
                        <img loading="lazy" class="pt-3 img-fluid"  src="images/links/linke2.jpg" alt="img">
                    </a>
                  </div><!-- Col end -->

                  <div class=" col-lg-6">
                    <a class=" gallery-popup" href="images/links/link3.jpg">
                        <img loading="lazy" class="pt-3 pt-lg-0 img-fluid w-100" src="images/links/link3.jpg" alt="img">
                    </a>
                  </div><!-- Col end -->
              </div><!-- Row end -->
            </div><!-- Container end -->
          </section><!-- Feature are end -->
    </div>
@endsection
