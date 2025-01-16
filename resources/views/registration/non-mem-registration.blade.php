@extends('home.master')

@section('title', 'Non-Members Register')
{{-- @section('banner-name', 'PSA NON-MEMBERS REGISTRATION') --}}

@section('content')
{{-- @include('home.banner') --}}

<section id="main-container" class="pb-4 main-container text-center project-area ">
    <div class="container">
        <div class="row justify-content-center mb-5" data-animation-in="slideInLeft" data-duration-in="1.2">
            <div class="col-lg-12" >
                <h3 class="into-sub-title" style="color: black">FOREIGN DELEGATES</h3>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <livewire:non-mem-reg/>
    </div>
</section><!-- Main container end -->
@endsection