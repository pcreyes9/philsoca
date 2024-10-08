<?php $page='venue'; ?>
@extends('home.master')

@section('title', 'Venue')

@section('content')
    <section id="news" class="project-area">
        <div class="container" >
            {{-- style="background: rgba(255, 255, 255, 0.5); border-radius: 25px" --}}
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-title" >Metro Manila | Philippines</h2>
                    <h3 class="section-sub-title " >MANILA MARRIOTT HOTEL</h3>
                </div>
            </div>
            <div class="container text-center">
                <div class="row justify-content-center">
                    {{-- <div class="col-sm-4 p-2 px-3" style="background-color: #000066;" >
                        <h1 style="color: #ffffff;">Venue</h1>
                        
                        <p class="hotel-p" style="color: #ffffff;"><strong>Contact No.:</strong><br>
                        <span style="color: #FED141">+63 2-89889999 <br>
                            
                            <br><br> <strong>Email:</strong> <br> <span style="color: #FED141">mnlmarriotthotel@gmail.com</span> <br><br>
                            <strong>Address:</strong> <br> <span style="color: #FED141">Manila Marriott Hotel, Newport Blvd, Pasay, Metro Manila, Philippines</span> 
                        </p>
                    </div> --}}
                    
                    <div class="col-sm-10 d-sm-block">
                        <a class="gallery-popup" href="images/Manila Marriott Hotel.jpg">
                            <img loading="lazy" class="img-fluid"  src="images/Marriot Hotel.png" alt="img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="news" class="project-area" style="background: #000066; color: white !important">
        <div class="container" >
            <div class="text-left row">
                <div class="col-12 col-md-5 text-center">
                    {{-- <h2 class="section-title">REACHING OUR Venue</h2>
                    <h3 class="section-sub-title">Manila Marriott Hotel</h3>     --}}

                    <p class="hotel-p" style="color: #dbdbdb;">
                        <strong>Manila Marriott Hotel</strong><br>
                        2 Resorts Drive, Newport World Resorts, NCR - Fourth District, Barangay 183, Pasay City, Metro Manila, Philippines, 1309 <br><br>
                        <strong>Email: </strong> mnlmarriotthotel@gmail.com<br>
                        <strong>Tel: </strong> +63 2-89889999<br>
                        <a target="_blank" href="https://www.marriott.com/en-us/hotels/mnlap-manila-marriott-hotel/overview/"><strong style=" text-decoration: underline;">Visit Website</strong> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                            </svg></a><br>
                    </p>
                </div>
                <div class="col-12 col-md-7 text-center">
                    <div class="maps text-center rounded-5">
                    <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.379885735202!2d121.0185!3d14.520249999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ceccf5c03667%3A0xf83d6792c2c9f350!2sManila%20Marriott%20Hotel!5e0!3m2!1sen!2sph!4v1722479528506!5m2!1sen!2sph" width="1000" height="800" style="border:2px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>   
                </div>          
            </div>
        </div>
    </section>
@endsection