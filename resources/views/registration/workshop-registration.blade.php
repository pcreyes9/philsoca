@extends('home.master')

@section('title', 'Workshop Registration')
{{-- @section('banner-name', 'PSA NON-MEMBERS REGISTRATION') --}}

@section('content')
{{-- @include('home.banner') --}}

<section id="main-container" class="main-container text-center project-area ">
    <div class="container">
        <div class="row justify-content-center" data-animation-in="slideInLeft" data-duration-in="1.2">
            <div class="col-lg-12" >
                 <h3 class="section-sub-title">WORKSHOP Registration</h3>
                {{-- <h4 class="mt-n2 mb-2" style="color: black; font-style: italic; "><strong>(You can only choose 1 session)</strong></h4> --}}
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <livewire:workshop-reg/>
    </div>
</section><!-- Main container end -->
@endsection