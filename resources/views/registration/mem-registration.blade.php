@extends('home.master')

@section('title', 'Register')
@section('banner-name', 'REGISTRATION')

@section('content')
@include('home.banner')

<section id="main-container" class="pb-4 main-container text-center project-area ">
    <div class="container">
        <div class="row justify-content-center mb-5" data-animation-in="slideInLeft" data-duration-in="1.2">
            <div class="col-lg-12 mb-5" >
                <h3 class="into-sub-title" >The 24th ASEAN Congress of Anesthesiologists (ACA 2024)</h3>
                <h3 class="section-header">23rd - 24th October 2025 | Manila Marriot Hotel</h3>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
                <p class="para-head">Registration Guidelines</p>
                <p class="hotel-p">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper nunc nec ornare ornare. Nam sagittis elit ac ligula bibendum condimentum. In sodales, neque et tincidunt congue, lorem dui interdum arcu, id lobortis tortor nibh quis magna. Pellentesque sit amet semper turpis, non feugiat tellus. Duis malesuada nibh nec suscipit volutpat.
                </p>
                <br>
                <p class="para-head">Registration Rates</p>
                <p class="hotel-p">
                    All conference participants and presenters of accepted presentations must register and make the registration fees in full. (Rates below is just a sample.)               
                </p>
                <img class="img-fluid w-50 zoom fade-img" src="images/MC 2024 RATES.jpg" alt="">
                <p class="hotel-p">
                    <br>
                    Remarks: other type of registrations stated above will fall under “NON-Member” category.
                </p>
                <br>
                <p class="para-head">Registration Procedure</p>
                <p class="hotel-p">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper nunc nec ornare ornare. Nam sagittis elit ac ligula bibendum condimentum. In sodales, neque et tincidunt congue, lorem dui interdum arcu, id lobortis tortor nibh quis magna. Pellentesque sit amet semper turpis, non feugiat tellus. Duis malesuada nibh nec suscipit volutpat.
                </p>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <livewire:mem-reg/>
    </div>
</section><!-- Main container end -->
@endsection