@extends('home.master')

@section('title', 'Register')
@section('banner-name', 'PSA MEMBERS REGISTRATION')

@section('content')
@include('home.banner')

<section id="main-container" class="pb-4 main-container text-center project-area ">
    <div class="container">
        <div class="row justify-content-center mb-2" data-animation-in="slideInLeft" data-duration-in="1.2">
            <div class="col-lg-12" >
                <h3 class="into-sub-title" style="color: black">PSA MEMBERS REGISTRATION</h3>
                <h4 class="mt-5" style="color: black; font-style: italic; "><strong>Forgot your PSA ID NO.? </strong></h4>
                <h5 class="mt-n2" style="color: black; font-style: italic; ">Click PSA ID NO. CHECKER button</h5>
                <p class="mt-n3" style="color: black; font-style: italic; ">Enter your last name, and your PSA ID no. will appear</p>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <livewire:mem-reg/>
    </div>
</section><!-- Main container end -->
@endsection
