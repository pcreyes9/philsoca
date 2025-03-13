<?php $page='venue'; ?>
@extends('home.master')

@section('title', '2025 ACA Research Forum')
@section('banner-name', '2025 ACA Research Forum')

@section('content')
@include('home.banner')

<section id="news" class="project-area">
    <div class="container" >
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        {{-- style="background: rgba(255, 255, 255, 0.5); border-radius: 25px" --}}
        <div class="row">
            <div class="col-12 text-center">
                {{-- <h2 class="section-title">Metro Manila | Philippines</h2> --}}
                <h3 class="section-sub-title">Important Dates</h3>
                <div class="row text-center justify-content-center">
                    <div class="col-md-3 col-sm-6 ts-facts" >
                        <div class="ts-facts-img">
                        </div>
                        <div class="ts-facts-content rounded-3 p-2" style="background-color: #0b6e4f">
                          <h1 class="ts-date mb-n4">Jul</h1>
                          <h2 class="ts-facts-num"><span class="counterUp" data-count="30">30</span></h2>
                          <h3 class="ts-facts-title" style="color: #fff">Abstract submission deadline</h3>
                        </div>
                    </div><!-- Col end -->
          
                    <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0 ">
                        <div class="ts-facts-img">
                        </div>
                        <div class="ts-facts-content rounded-3 p-2" style="background-color: #0b6e4f">
                          <h1 class="ts-date mb-n4">Aug</h1>
                          <h2 class="ts-facts-num"><span class="counterUp" data-count="22">22</span></h2>
                          <h3 class="ts-facts-title">Notification of acceptance</h3>
                        </div>
                    </div><!-- Col end -->
          
                    <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0 ">
                        <div class="ts-facts-img">
                        </div>
                        <div class="ts-facts-content rounded-3 p-2 " style="background-color: #0b6e4f">
                          <h1 class="ts-date mb-n4">Sept</h1>
                          <h2 class="ts-facts-num"><span class="counterUp" data-count="30">30</span></h2>
                          <h3 class="ts-facts-title">Registration deadline for presenting authors</h3>
                        </div>
                    </div><!-- Col end -->
          
                  </div> <!-- row end -->
                {{-- <p class="para-head fd">~ Important Dates</p> --}}
                {{-- <table class="table table-striped-columns text-center table-bordered ">
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
                </table> --}}

                <h3 class="para-head fd mt-5 mb-3">RESEARCH FORUM</h3>
                {{-- <h3 class="section-sub-title mt-5 pt-5">RESEARCH FORUM</h3> --}}
                <p class="hotel-p fd">
                    The 2025 ACA Research Forum will be composed of an Exhibit Hall Poster Presentation featured throughout the 3-day Convention, as well as Oral Presentation in separate Moderated Sessions for the Residents’ and subspecialty Fellows’ Research. For the Poster Presentation, entries will be categorized to one of the following: 1) Fellows’ Research, 2) Residents’ Research, 3) Fellows’ Case Reports, and 4) Residents’ Case Reports.                
                {{-- <p class="para-head fd mt-5">~  Presentation Type</p>
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
                </table> --}}
            </div>
        </div>

        
    </div>
    
</section>
@endsection