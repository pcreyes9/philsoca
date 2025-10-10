@extends('home.master')

@section('title', 'International Registration')
{{-- @section('banner-name', 'PSA NON-MEMBERS REGISTRATION') --}}

@section('content')
{{-- @include('home.banner') --}}

<section id="main-container" class="pb-4 main-container text-center project-area ">
    <div class="container">
        <div class="row justify-content-center mb-5" data-animation-in="slideInLeft" data-duration-in="1.2">
            <div class="col-lg-12" >
                {{-- <h3 class="into-sub-title" style="color: black">FOREIGN DELEGATES</h3> --}}
                <h3 class="into-sub-title" style="color: black"><i>ALL TYPES OF REGISTRATIONS ARE NOW CLOSED</i></h3>
                <h5 class="mt-n2 mb-5 pb-5" style="color: black; font-style: italic; ">ONSITE registration will open on October 23, 2025, at 7:00 AM.</h5>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        {{-- <livewire:non-mem-reg/> --}}
    </div>
</section><!-- Main container end -->
@endsection