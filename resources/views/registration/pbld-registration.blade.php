@extends('home.master')

@section('title', 'PBLD Registration')
{{-- @section('banner-name', 'PSA NON-MEMBERS REGISTRATION') --}}

@section('content')
{{-- @include('home.banner') --}}

<section id="main-container" class="main-container text-center project-area ">
    <div class="container">
        <div class="row justify-content-center" data-animation-in="slideInLeft" data-duration-in="1.2">
            <div class="col-lg-12" >
                <h3 class="section-sub-title">PBLD Registration</h3>
                <h4 class="mt-n5 mb-5" style="color: black; font-style: italic; "><strong>(There are only 11 participants per session)</strong></h4>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <livewire:pbld-reg/>
    </div>
</section><!-- Main container end -->
@endsection