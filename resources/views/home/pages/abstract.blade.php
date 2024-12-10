<?php $page='venue'; ?>
@extends('home.master')

@section('title', 'Abstract')
@section('banner-name', 'Abstract')

@section('content')
@include('home.banner')

<section id="news" class="project-area">
    <div class="container" >
        {{-- style="background: rgba(255, 255, 255, 0.5); border-radius: 25px" --}}
        <div class="row">
            <div class="col-12">
                {{-- <h2 class="section-title">Metro Manila | Philippines</h2> --}}
                <h3 class="section-sub-title">Presentation Guidelines</h3>
                <p class="para-head fd">~ Important Dates</p>
                <table class="table table-striped-columns text-center table-bordered ">
                    <tbody>
                      <tr>
                        <th scope="col" style="background: rgba(242, 222, 2, .7); ">Abstract presenter registration</th>
                        <th scope="row">Oct 11(Fri), 2024 11:59:59 pm in KST (GMT+9)</th>
                      </tr>
                      <tr>
                        <th scope="col" style="background: rgba(242, 222, 2, .7)">Presentation file</th>
                        <th scope="row">Oct 20(Sun), 2024 11:59:59 pm in KST (GMT+9)</th>
                      </tr>
                    </tbody>
                </table>

                <p class="para-head fd mt-5">~ General Information</p>
                <p class="hotel-p fd">
                    1. All presenters must present their abstract onsite. (NO online presentation) <br>
                    2. All presentations must be delivered in English. <br>
                    3. You could resubmit your presentation materials if you want to make any revisions before Oct 20(Sun). However, no changes will be accepted after the file submission deadline.
                </p>
                <p class="para-head fd mt-5">~  Presentation Type</p>
                <table class="table table-striped-columns text-center table-bordered ">
                    <thead>
                        <tr style="background: rgba(242, 222, 2, .7); ">
                          <th scope="col">Type</th>
                          <th scope="col">Format</th>
                          <th scope="col">Location</th>
                          <th scope="col">No. of slides</th>
                          <th scope="col">Time</th>
                        </tr>
                      </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Abstract Competition</th>
                            <td>Oral</td>
                            <td>Room B</td>
                            <td>No limit</td>
                            <td>10 mins (Presentation) 5 mins (Q&A)</td>
                        </tr>
                        <tr>
                            <th scope="row">Abstract Presentation</th>
                            <td>Oral</td>
                            <td>Room B & C</td>
                            <td>No limit</td>
                            <td>7 mins (Presentation) 3 mins (Q&A)</td>
                        </tr>
                        <tr>
                            <th scope="row">E-poster Display</th>
                            <td>E-poster</td>
                            <td>Exhibition A</td>
                            <td>1 page</td>
                            <td>Display only</td>
                        </tr>
                    </tbody>
                </table>
                <p class="para-head fd mt-5">~  Presentation Details - Oral Presentation (Abstract competition & presentation)</p>
                <p class="hotel-p fd">Please carefully read the guidelines below before preparing your abstract presentation.</p>
                <table class="table table-striped-columns text-center table-bordered ">
                    <tbody>
                        <tr >
                            <th class="align-middle" scope="col" style="background: rgba(242, 222, 2, .7); ">Format</th>
                            <td scope="row" class="text-left">*.ppt, *.pptx, or *.pdf <br> *Keynote file(Mac), *.key cannot be supported.</td>
                        </tr>
                        <tr >
                            <th class="align-middle" scope="col" style="background: rgba(242, 222, 2, .7); " >Size</th>
                            <td scope="row" class="text-left">16:9 (Landscape)</td>
                        </tr>
                        <tr >
                            <th class="align-middle" scope="col" style="background: rgba(242, 222, 2, .7); ">Font</th>
                            <td scope="row" class="text-left">Arial, Calibri, or Tahoma is recommended. <br> *If you want to use a different font, please make sure to embed the font when you save the file or please submit your presentation file in *.pdf format.</td>
                        </tr>
                        <tr >
                            <th class="align-middle" scope="col" style="background: rgba(242, 222, 2, .7); ">Media</th>
                            <td scope="row" class="text-left">All video materials must be embedded in the presentation. <br> *Not Playable Separately</td>
                        </tr>
                        <tr >
                            <th class="align-middle" scope="col" style="background: rgba(242, 222, 2, .7); ">Template</th>
                            <td scope="row" class="text-left">Make sure to make a presentation using the template below. <br> *Keynote file(Mac), *.key cannot be supported.</td>
                        </tr>
                        <tr >
                            <th class="align-middle" scope="col" style="background: rgba(242, 222, 2, .7); ">File Submission</th>
                            <td scope="row" class="text-left"> <br> *Keynote file(Mac), *.key cannot be supported.</td>
                        </tr>
                    </tbody>
                </table>

                <p class="para-head fd mt-5">~  Presentation Details - E-poster</p>
                <p class="hotel-p fd">Please carefully read the guidelines below before preparing your poster. <br>
                    Also, note that E-poster will not include an oral presentation and will be displayed only on e-poster devices placed throughout the venue.</p>
                <table class="table table-striped-columns text-center table-bordered ">
                    <tbody>
                        <tr >
                            <th class="align-middle" scope="col" style="background: rgba(242, 222, 2, .7); ">Format</th>
                            <td scope="row" class="text-left">ONLY *.pdf</td>
                        </tr>
                        <tr >
                            <th class="align-middle" scope="col" style="background: rgba(242, 222, 2, .7); " >Size</th>
                            <td scope="row" class="text-left">9:16 (Portrait)</td>
                        </tr>
                        <tr >
                            <th class="align-middle" scope="col" style="background: rgba(242, 222, 2, .7); ">Font</th>
                            <td scope="row" class="text-left">Arial, Calibri, or Tahoma is recommended. <br> *If you want to use a different font, please make sure to embed the font when you save the file or please submit your presentation file in *.pdf format.</td>
                        </tr>
                        <tr >
                            <th class="align-middle" scope="col" style="background: rgba(242, 222, 2, .7); ">Media</th>
                            <td scope="row" class="text-left">All video materials must be embedded in the presentation. <br> *Not Playable Separately</td>
                        </tr>
                        <tr >
                            <th class="align-middle" scope="col" style="background: rgba(242, 222, 2, .7); ">Template</th>
                            <td scope="row" class="text-left">Make sure to make a presentation using the template below. <br> *Keynote file(Mac), *.key cannot be supported.</td>
                        </tr>
                        <tr >
                            <th class="align-middle" scope="col" style="background: rgba(242, 222, 2, .7); ">File Submission</th>
                            <td scope="row" class="text-left"> <br> *Keynote file(Mac), *.key cannot be supported.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        
    </div>
    
</section>
<section id="news" class="project-area" style="background: #000066; color: white !important">
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