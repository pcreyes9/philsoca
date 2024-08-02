@extends('home.master')

@section('title', 'Venue')

@section('content')
    <div class="">
        <section id="news" class="project-area solid-bg">
            <div class="container p-4 ml-15" style="background-color:#e9eaec; border-radius: 25px">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title">Metro Manila | Philippines</h2>
                        <h3 class="section-sub-title ">MANILA MARRIOTT HOTEL</h3>
                    </div>
                </div>
                <div class="container text-center">
                    <div class="row justify-content-center">
                        <div class="col-sm-4 p-2 px-3" style="background-color: #000066;" >
                            <h1 style="color: #ffffff;">Venue</h1>
                            
                            <p class="hotel-p" style="color: #ffffff;"><strong>Contact No.:</strong><br>
                            <span style="color: #FED141">+63 2-89889999 <br>
                                
                                <br><br> <strong>Email:</strong> <br> <span style="color: #FED141">mnlmarriotthotel@gmail.com</span> <br><br>
                                <strong>Address:</strong> <br> <span style="color: #FED141">Manila Marriott Hotel, Newport Blvd, Pasay, Metro Manila, Philippines</span> 
                            </p>
                        </div>
                        
                        <div class="col-sm-8 d-none d-sm-block">
                            <a class="gallery-popup" href="images/Manila Marriott Hotel.jpg">
                                <img loading="lazy" class="img-fluid w-100 " src="images/Manila Marriott Hotel.jpg" alt="img">
                            </a>
                        </div>
                        
                    </div>
                    <hr class="" style="clear:both; border: 1px solid black;"/>
                    <div class="text-center row">
                        <div class="col-12">
                            {{-- <h2 class="section-title">REACHING OUR OFFICE</h2> --}}
                            <h3 class="section-sub-title">FIND OUR VENUE</h3>
                        </div>
                    </div>
                    <div class="container text-center rounded-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.379885735202!2d121.0185!3d14.520249999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ceccf5c03667%3A0xf83d6792c2c9f350!2sManila%20Marriott%20Hotel!5e0!3m2!1sen!2sph!4v1722479528506!5m2!1sen!2sph" width="1000" height="600" style="border:2px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection