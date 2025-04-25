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
                {{-- <h2 class="section-title">Reaching our Office</h2> --}}
                <h3 class="section-sub-title">Contact Us</h3>
            </div>
        </div>

        <div class="row">
            {{-- <div class="col-md-4">
              <div class="ts-service-box-bg text-center h-100">
                <span class="ts-service-icon icon-round">
                  <i class="fas fa-map-marker-alt mr-0"></i>
                </span>
                <div class="ts-service-box-content">
                  <h4>Visit Our Office</h4>
                  <p>Room 102, PMA Building, 1100 North Ave, Diliman, Quezon City, 1100 Metro Manila, Philippines</p>
                </div>
              </div>
            </div><!-- Col 1 end --> --}}
      
            <div class="col-md-6 mb-3 mb-md-0">
              <div class="ts-service-box-bg text-center h-100">
                <span class="ts-service-icon icon-round">
                  <i class="fa fa-envelope mr-0"></i>
                </span>
                <div class="ts-service-box-content">
                  <h4>Email Us</h4>
                  <p>ACAsecretariat2025@gmail.com</p>
                </div>
              </div>
            </div><!-- Col 2 end -->

      
            <div class="col-md-6">
              <div class="ts-service-box-bg text-center h-100">
                <span class="ts-service-icon icon-round">
                  <i class="fa fa-phone-square mr-0"></i>
                </span>
                <div class="ts-service-box-content">
                  <h4>Call Us</h4>
                  <p>Tel: 89295852 | 84522058 <br> Cel no. : +63 9178329069 | +63 9209522120</p>
                  
                </div>
              </div>
            </div><!-- Col 3 end -->
      
          </div><!-- 1st row end -->

        <div class="gap-40"></div>
        
          <div class="rounded">
            <iframe class="rounded w-100" 
            style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d850.6950003871406!2d121.03265045308753!3d14.655280007104881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b6e2af5aed05%3A0xa349a00f5cc8d19!2sThe%20Philippine%20Society%20of%20Anesthesiologists%2C%20Inc.!5e0!3m2!1sen!2sph!4v1730273391259!5m2!1sen!2sph"
            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
@endsection