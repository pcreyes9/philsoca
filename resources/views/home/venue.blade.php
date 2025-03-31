<?php $page='venue'; ?>
@extends('home.master')

@section('title', 'Venue')
@section('banner-name', 'Venue')

@section('content')
@include('home.banner')

<section id="news" class="project-area">
    <div class="container" >
        {{-- style="background: rgba(255, 255, 255, 0.5); border-radius: 25px" --}}
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title">Metro Manila | Philippines</h2>
                <h3 class="section-sub-title">MARRIOTT GRAND BALLROOM</h3>
            </div>
        </div>
        <div class="banner-carousel banner-carousel-1">
            <div class="banner-carousel-item" style="background-image:url(images/slider-main/MARRIOTT_1.jpg); " >
            </div>
            {{-- TESTING --}}
            <div class="banner-carousel-item" style="background-image:url(images/slider-main/MARRIOTT_4.jpg); box-shadow: 50px 50px 10px;">
            </div>
        
            <div class="banner-carousel-item" style="background-image:url(images/slider-main/MARRIOTT_2.jpg)">
            </div>
        
            <div class="banner-carousel-item" style="background-image:url(images/slider-main/MARRIOTT_3.jpg)">
            </div>
        </div>
    </div>
    
</section>
<section id="news" class="project-area" style="background: #ac071a; color: white !important">
    <div class="container" >
        <div class="text-left">
            <div class="text-center">
                {{-- <h2 class="section-title">REACHING OUR Venue</h2>
                <h3 class="section-sub-title">Manila Marriott Hotel</h3>     --}}

                <p class="hotel-p pb-4" style="color: #dbdbdb;">
                    <strong>Marriott Grand Ballroom</strong><br>
                    2 Resorts Drive, Newport World Resorts, NCR - Fourth District, Barangay 183, Pasay City, Metro Manila, Philippines, 1309 <br><br>
                    <strong>Email: </strong> mnlmarriotthotel@gmail.com<br>
                    <strong>Tel: </strong> +63 2-89889999<br>
                    <a target="_blank" href="https://www.marriott.com/en-us/hotels/mnlap-manila-marriott-hotel/overview/"><strong style=" text-decoration: underline;">Visit Website</strong> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                        </svg></a><br>
                </p>
            </div>
            {{-- <div class="col-12 col-md-7 text-center">
                <div class="maps text-center rounded-5">
                <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.3633535007502!2d121.0145836757402!3d14.521196879014486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cf2a572a7d8d%3A0x55a7edf4c7773bda!2sMarriott%20Grand%20Ballroom!5e0!3m2!1sen!2sph!4v1728444732486!5m2!1sen!2sph" width="1000" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>    --}}
            <div class="rounded">
                <iframe class="rounded w-100" 
                style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.3633535007502!2d121.0145836757402!3d14.521196879014486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cf2a572a7d8d%3A0x55a7edf4c7773bda!2sMarriott%20Grand%20Ballroom!5e0!3m2!1sen!2sph!4v1728444732486!5m2!1sen!2sph" 
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>        
        </div>
    </div>
</section>
@endsection