<?php $page='venue'; ?>
@extends('home.master')

@section('title', 'Venue')
@section('banner-name', 'Venue')

@section('content')
@include('home.banner')

<section id="news" class="project-area">
    <div class="container" >
        {{-- style="background: rgba(255, 255, 255, 0.5); border-radius: 25px" --}}
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-3 " src="images/sponsors/gold.jpg" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/silver1.jpg" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/silver2.jpg" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/bronze1.jpg" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/bronze2.jpg" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/bronze3.jpg" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sponsors/brass.jpg" alt="Image is still in process.">
        </div>
    </div>
</section>
@endsection