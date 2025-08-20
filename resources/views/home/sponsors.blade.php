<?php $page='venue'; ?>
@extends('home.master')

@section('title', 'Sponsorship & Exhibition')
@section('banner-name', 'Venue')

@section('content')
{{-- @include('home.banner') --}}




<section id="news" class="project-area">
    <div class="container" >

        {{-- <div>
            <h3 class="py-2 text-center pb-5" style="font-weight: 700; font-size: 25px; text-transform: none">For Sponsorship, write an email to: <span style="font-style: italic; font-size: 25px;">sponsorshipaca2025@gmail.com</span></h3>
        </div> --}}
        {{-- style="background: rgba(255, 255, 255, 0.5); border-radius: 25px" --}}
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-3 " src="images/sponsors/gold.jpg?v={{ time() }}" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/silver1.jpg?v={{ time() }}" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/silver2.jpg?v={{ time() }}" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/bronze1.jpg?v={{ time() }}" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/bronze2.jpg?v={{ time() }}" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/bronze3.jpg?v={{ time() }}" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/brass.jpg?v={{ time() }}" alt="Image is still in process.">
        </div>
    </div>
</section>
@endsection