@extends('home.master')

@section('title', 'POCUS Workshop Program')
@section('banner-name', 'POCUS Workshop Program')

@section('content')
{{-- @include('home.banner') --}}

<section id="main-container" class="pb-4 main-container text-center project-area ">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row justify-content-center mb-5" data-animation-in="slideInLeft" data-duration-in="1.2">
            <div class="col-lg-12" >
                <h3 class="into-workshop-title" >POCUS Workshop Program</h3>
            </div>
            <div class="col-lg-11 mb-3">
                <h3 class="section-header">October 25, 2025 | 8:00 AM – 11:00 AM <br> 3<sup class="text-lowercase">rd</sup> Floor VIP East, Marriott Grand Ballroom</h3>
            </div>
             <div class="col-lg-12 mt-4 mt-lg-5">
                <div class="table-responsive mb-5">
                    <p class="para-head text-center fd mb-4">Part 1: LIVE DEMONSTRATION</p>
                    <p class="workshop-head fd mb-3">Moderator: Peñafrancia C. Cano, MD</p>
                    <table class="table fd mb-5">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="text-left align-middle" scope="col">Time</th>
                                <th class="text-left align-middle" scope="col">Topic</th>
                                <th class="text-left align-middle" scope="col">Guest Faculty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-left" scope="row">8:05 AM - 8:15 AM </th>
                                <td class="text-left">Hemodynamic Assessment with Neck Vessels</td>
                                <td class="text-left">Dr. Suneel Desai</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">8:15 AM - 8:25 AM </th>
                                <td class="text-left">FAST </td>
                                <td class="text-left">Dr. Shahridan Mohd Fathil</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">8:25 AM - 8:40 AM </th>
                                <td class="text-left">FoCUS (Focused Cardiac Ultrasound) </td>
                                <td class="text-left">Dr. Suresh Paranjothy</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <p class="para-head text-center fd mb-4">Part 2: WORKSHOP PROPER</p>
                    {{-- <p class="workshop-head fd mb-3">Workshop Stations (7 attendees per station)</p> --}}
                    <table class="table fd mb-3">
                        <thead class="bg-danger text-white">
                            <tr>
                                <th class="text-left align-middle" scope="col">Time</th>
                                <th class="text-left align-middle" scope="col">Topic</th>
                                <th class="text-left align-middle" scope="col">Guest Faculty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-left" scope="row">8:45 AM - 9:10 AM </th>
                                <td class="text-left">Station 1: Heart (FOCUS) </td>
                                <td class="text-left">Suresh Paranjothy, MD <br> Mark Yu, MD</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">9:10 AM - 9:35 AM</th>
                                <td class="text-left">Station 2: Lung</td>
                                <td class="text-left">Laiza Teodoro Teoxon, MD <br> Chlenice dela Cruz, MD</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">9:35 AM - 9:55 AM </th>
                                <td class="text-left" colspan="1" scope="row"><strong>Coffee Break</strong></td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">9:55 AM - 10:20 AM </th>
                                <td class="text-left">Station 3: IVC</td>
                                <td class="text-left">Raisalam Macataman, MD <br> Melissa Caranto, MD</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">10:20 AM - 10:45 AM </th>
                                <td class="text-left">Station 4: Gastric</td>
                                <td class="text-left">Gina Gumintad, MD <br> Donie Andrew E. Rañon, MD</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">10:45 AM - 11:10 AM </th>
                                <td class="text-left">Station 5: Airway</td>
                                <td class="text-left">Noel Aypa, MD <br> Sherwin Jae Enriquez, MD</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <br>
                         
                <div class="d-grid gap-2">
                    <a href="{{ route('workshopReg') }}" target="_blank" class="btn btn-primary mb-1" style="font-size: 20px">Workshop Registration</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- Main container end -->
@endsection


