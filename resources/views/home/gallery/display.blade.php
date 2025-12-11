@extends('home.master')

@section('title', 'ACA 2025 Gallery')
@section('banner-name', 'PSA: Midyar Convention')

@section('content')

<div id="page-loader">
    <div class="loader-content">
        <div class="spinner"></div>
        <p class="loader-text">Images are loading...</p>
    </div>
</div>

<section id="project-area" class="project-area solid-bg">
<div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
            <h2 class="section-title">ASEAN CONGRESS OF ANESTHESIOLOGISTS 2025 </h2>
            <h3 class="section-sub-title">{{$title}}</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-12">
            <div class="shuffle-btn-group">
                <label class="active" for="all">
                    <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
                </label>
                <label for="opening">
                    <input type="radio" name="shuffle-filter" id="opening" value="opening">Opening Ceremony
                </label>
                <label for="registration">
                    <input type="radio" name="shuffle-filter" id="registration" value="registration">Registration
                </label>
                <label for="asean">
                    <input type="radio" name="shuffle-filter" id="asean" value="asean">ASEAN Night
                </label>
                <label for="lectures">
                    <input type="radio" name="shuffle-filter" id="lectures" value="lectures">Plenary Lectures
                </label>
                <label for="chapter">
                    <input type="radio" name="shuffle-filter" id="chapter" value="chapter">Chapter Delegates Meeting
                </label>
                {{-- <label for="government">
                    <input type="radio" name="shuffle-filter" id="government" value="government">Government
                </label>
                <label for="infrastructure">
                    <input type="radio" name="shuffle-filter" id="infrastructure" value="infrastructure">Infrastructure
                </label>
                <label for="residential">
                    <input type="radio" name="shuffle-filter" id="residential" value="residential">Residential
                </label>
                <label for="healthcare">
                    <input type="radio" name="shuffle-filter" id="healthcare" value="healthcare">Healthcare
                </label> --}}
            </div><!-- project filter end -->


            <div class="row shuffle-wrapper">
                <div class="col-1 shuffle-sizer"></div>
                @foreach ($arrOpening as $pic)
                    <div class="col-lg-4 col-md-6 col-6 shuffle-item p-1" data-groups="[&quot;opening&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('images/gallery/day1/opening_ceremony/' . $pic) }}" aria-label="project-img">
                                <img class="img-fluid" src="{{ asset('images/gallery/day1/opening_ceremony/' . $pic) }}" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>

                            {{-- <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="projects-single.html">Capital Teltway Building</a>
                                    </h3>
                                    <p class="project-cat">opening, Interiors</p>
                                </div>
                            </div> --}}
                        </div>
                    </div><!-- shuffle item 1 end -->
                @endforeach
                
                
                @foreach ($arrReg as $pic)
                    <div class="col-lg-4 col-md-6 col-6 shuffle-item p-1" data-groups="[&quot;registration&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('images/gallery/day1/registration/' . $pic) }}" aria-label="project-img">
                                <img class="img-fluid" src="{{ asset('images/gallery/day1/registration/' . $pic) }}" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($arrAsean as $pic)
                    <div class="col-lg-4 col-md-6 col-6 shuffle-item p-1" data-groups="[&quot;asean&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('images/gallery/day1/asean_night/' . $pic) }}" aria-label="project-img">
                                <img class="img-fluid" src="{{ asset('images/gallery/day1/asean_night/' . $pic) }}" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($arrChapter as $pic)
                    <div class="col-lg-4 col-md-6 col-6 shuffle-item p-1" data-groups="[&quot;chapter&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('images/gallery/day1/chapter_delegates/' . $pic) }}" aria-label="project-img">
                                <img class="img-fluid" src="{{ asset('images/gallery/day1/chapter_delegates/' . $pic) }}" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                        </div>
                    </div>
                @endforeach
                @foreach ($arrLectures as $pic)
                    <div class="col-lg-4 col-md-6 col-6 shuffle-item p-1" data-groups="[&quot;lectures&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('images/gallery/day1/lectures/' . $pic) }}" aria-label="project-img">
                                <img class="img-fluid" src="{{ asset('images/gallery/day1/lectures/' . $pic) }}" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="general-btn text-center">
            <a class="btn btn-primary" target="_blank" href="https://www.facebook.com/media/set/?set=a.1333298321827008&type=3">View All Photos</a>
        </div>
    </div>
</div>
<!--/ Container end -->
</section><!-- Project area end -->
@endsection
<script>
    window.addEventListener("load", function () {
        const loader = document.getElementById("page-loader");
        loader.style.opacity = "0";
        setTimeout(() => loader.style.display = "none", 500);
    });
</script>

