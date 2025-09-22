@extends('home.master')

@section('title', 'PBLD Registration')
{{-- @section('banner-name', 'PSA NON-MEMBERS REGISTRATION') --}}

@section('content')
{{-- @include('home.banner') --}}

<section id="main-container" class="main-container text-center project-area ">
    <div class="container">
        {{-- <div class="row justify-content-center" data-animation-in="slideInLeft" data-duration-in="1.2">
            <div class="col-lg-12" >
                <h3 class="section-sub-title">PBLD Registration</h3>
                <h4 class="mt-n5 mb-5" style="color: black; font-style: italic; "><strong>(There are only 11 participants per session)</strong></h4>
                <h5 class="mt-n2 mb-2" style="color: black; font-style: italic; ">For foreign delegates' PSA ID checker</h5>
                <p class="mt-n3" style="color: black; font-style: italic; ">Enter your last name, and your PSA ID no. will appear</p>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div> --}}
        <h3 class="section-sub-title">Registration is still closed</h3>
        {{-- <livewire:pbld-reg/> --}}
    </div>
</section><!-- Main container end -->
@endsection