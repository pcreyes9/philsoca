<?php $page='venue'; ?>
@extends('home.master')

@section('title', 'Contact Us')
{{-- @section('banner-name', 'Venue') --}}

@section('content')
{{-- @include('home.banner') --}}

<section id="main-container" class="main-container text-center justify">
    <div class="container text-center justify">
        <div class="text-center">
            <div class="">
                <h2 class="section-title">Reaching our Office</h2>
                <h3 class="section-sub-title">Contact Us</h3>
            </div>
        </div>

        <div class="d-flex justify-content-center px-5 mx-3">
            <div class="ts-service-box-bg text-center h-100 px-5">
                <span class="ts-service-icon icon-round">
                    <i class="fa fa-envelope mr-0"></i>
                </span>
                <div class="ts-service-box-content px-5">
                    <h4>Email Us</h4>
                    <p>ACAsecretariat2025@gmail.com</p>
                </div>
            </div>
        </div><!-- Col 2 end -->

        <div class="gap-60"></div>
        
        <div class="rounded">
            <iframe class="rounded w-100" 
            style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d850.6950003871406!2d121.03265045308753!3d14.655280007104881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b6e2af5aed05%3A0xa349a00f5cc8d19!2sThe%20Philippine%20Society%20of%20Anesthesiologists%2C%20Inc.!5e0!3m2!1sen!2sph!4v1730273391259!5m2!1sen!2sph"
            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
@endsection