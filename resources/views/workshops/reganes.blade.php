@extends('home.master')

@section('title', 'Regional Anesthesia Workshop Program')
@section('banner-name', 'Regional Anesthesia Workshop Program')

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
                <h3 class="into-workshop-title" >Regional Anesthesia Workshop Program</h3>
            </div>
            <div class="col-lg-11 mb-5">
                <h3 class="section-header">October 23, 2025 | 1:00 PM - 4:00 PM <br> 3<sup class="text-lowercase">rd</sup> Floor VIP East, Marriott Grand Ballroom</h3>
            </div>
            <div class="col-lg-12 mt-4 mt-lg-0">
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
                                <th class="text-left" scope="row">1:00 PM - 1:15 PM </th>
                                <td class="text-left">PENG, Adductor Canal, IPack</td>
                                <td class="text-left">Dr. Jin Tae Kim</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">1:15 PM - 1:30 PM </th>
                                <td class="text-left">Lumbar and Thoracic Neuraxial </td>
                                <td class="text-left">Dr. Carinal Li</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">1:30 PM - 1:40 PM </th>
                                <td class="text-center" colspan="2" scope="row">Q and A</td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="workshop-head fd mb-3">Moderator: Lily Jingco, MD</p>
                    <table class="table fd">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="text-left align-middle" scope="col">Time</th>
                                <th class="text-left align-middle" scope="col">Topic</th>
                                <th class="text-left align-middle" scope="col">Guest Faculty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-left" scope="row">1:40 PM - 1:50 PM </th>
                                <td class="text-left">Paravertebral, ESP, Intertransverse</td>
                                <td class="text-left">Dr. Jean Louis Horn</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">1:50 PM - 2:00 PM </th>
                                <td class="text-left">Selective Upper Trunk Blocks  </td>
                                <td class="text-left">Dr. Nabil Elkassabany</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">2:00 PM - 2:10 PM </th>
                                <td class="text-center" colspan="2" scope="row">Qand A</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <p class="para-head text-center fd mb-4">Part 2: WORKSHOP PROPER</p>
                    <p class="workshop-head fd mb-3">Workshop Stations (7 attendees per station)</p>
                    <table class="table fd mb-3">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="text-left align-middle" scope="col">Time</th>
                                <th class="text-left align-middle" scope="col">Topic</th>
                                <th class="text-left align-middle" scope="col">Facilitators</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-left" scope="row">2:15 PM - 2:35 PM  </th>
                                <td class="text-left">Station 1 - Interscalene, Supraclavicular, Infraclavicular </td>
                                <td class="text-left">1. Samantha Claire Braganza, MD <br> 2. Romina Alexis Sulit, MD</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">2:35 PM - 2:55 PM  </th>
                                <td class="text-left">Station 2 - Femoral, Adductor, Ipack  </td>
                                <td class="text-left">1.	Marie Angelica Lasac, MD  <br> 2.	Mae Anne Tabberrah, MD  </td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">2:55 PM - 3:15 PM  </th>
                                <td class="text-left">Station 3 - Sciatic, Transgluteal, Subgluteal, Popliteal</td>
                                <td class="text-left">1.	Roneil Nogoy, MD   <br> 2.	Richard Genuino, MD</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">3:15 PM - 3:35 PM  </th>
                                <td class="text-left">Station 4 - Facia iliaca, PENG </td>
                                <td class="text-left">1. Alec Thomas Taaca, MD <br> 2. Maria Nathalia Montemayor, MD</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">3:35 PM - 3:55 PM  </th>
                                <td class="text-left">Station 5 - Quadratus Lumborum (1,2,3)  </td>
                                <td class="text-left">1.	Numeriano Samar Jr., MD <br>2.	Karl Sy Su, MD</td>
                            </tr>
                            <tr>
                                <th class="text-left" style="letter-spacing: -1px;" scope="row">3:55 PM - 4:15 PM  </th>
                                <td class="text-left">Station 6 - Paravertebral, Erector Spinae Plane Block</td>
                                <td class="text-left">1.	Joniday Nieva-Salonga, MD <br> 2.	Noel Aypa, MD </td>
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


