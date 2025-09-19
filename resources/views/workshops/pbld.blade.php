@extends('home.master')

@section('title', 'PBLD Program')
@section('banner-name', 'AIRWAY Workshop Program')

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
                {{-- <h3 class="into-workshop-title" >PBLD Program</h3> --}}
            </div>
            <div class="col-lg-11 mb-3">
                <h3 class="into-workshop-title">October 24 & 25, 2025<br> GF Executive 5, Marriot Grand Ballroom</h3>
            </div>

            <div class="d-flex justify-content-center">
                <img style="width: 100%;" class="align-middle mt-3 " src="images/ACA PBLD POSTER_091825.png?v={{ time() }}" alt="Image is still in process.">
            </div>



            
            {{-- <div class="col-lg-12 mt-4 mt-lg-0">
                <p class="workshop-head fd">Opening Remarks:</p>
                <p class="hotel-p fd">Anna Margarita F. Hilvano-Corsiga, MD</p>
                <br>
                <p class="workshop-head fd">Groupings and Workshop Mechanics:</p>
                <p class="hotel-p fd">Roan J. Jocson, MD</p>
                <br>

                <div class="table-responsive mb-3">
                    <table class="table fd">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="text-left align-middle" scope="col">Stations</th>
                                <th class="text-left align-middle" scope="col">Facilitators</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-left" scope="row">Station # 1 Front of Neck Access</th>
                                <td class="text-left">Loreto Felizar, MD <br> Lauren Laforteza, MD </td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Station # 2 Front of Neck Access</th>
                                <td class="text-left">Christian King Soriño, MD <br> Sheena Abigail Ong, MD </td>
                            </tr>
                             <tr>
                                <th class="text-left" scope="row">Station # 3 Videolaryngoscope Macintosh Blade and Hyperangulated Blade </th>
                                <td class="text-left">Anna Margarita Hilvano Corsiga, MD <br> Ella Patricia Ravanera, MD </td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Station #4 Bougie Intubation with the Kiwi Grip/Pistol Grip</th>
                                <td class="text-left">Anna Margarita Hilvano Corsiga, MD <br> Ella Patricia Ravanera, MD </td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Station #5 Optical Stylet </th>
                                <td class="text-left">Ivan Gil Balmadrid, MD </td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Station #6 SALAD</th>
                                <td class="text-left">Roan Jocson, MD </td>
                            </tr>
                             <tr>
                                <th class="text-left" scope="row">Station #7 Dual Technique – <br> 
                                    &nbsp a)	VL + Flexible videoscope <br>
                                    &nbsp b)	VL + Optical stylet <br>
                                    &nbsp c)	Intubation thru SGA 
                                </th>
                                <td class="text-left">Jonart Villanueva, MD <br> Ralph Anislag, MD <br> Dennis Lopez, MD </td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Station # 8 Flexible Guided Intubation</th>
                                <td class="text-left">Eduardo Salvador, MD</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">Station # 9 How to Initiate High Flow Therapy</th>
                                <td class="text-left">Kaye Agcaoili, MD</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <br>
                         
                <div class="d-grid gap-2">
                    <a href="{{ route('workshopReg') }}" target="_blank" class="btn btn-dark mb-1" style="font-size: 20px">Workshop Registration</a>
                </div>
            </div> --}}
        </div>
    </div>
</section><!-- Main container end -->
@endsection


