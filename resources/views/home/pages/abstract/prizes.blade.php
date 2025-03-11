<?php $page='venue'; ?>
@extends('home.master')

@section('title', '2025 ACA Research Forum')
@section('banner-name', '2025 ACA Research Forum')

@section('content')
@include('home.banner')

<section id="news" class="project-area">
    <div class="container" >
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        {{-- style="background: rgba(255, 255, 255, 0.5); border-radius: 25px" --}}
        <div class="d-flex justify-content-center">
            <img style="width: 75%;" class="align-middle mt-3 " src="images/abstract prizes.png" alt="Image is still in process.">

        </div>
    </div>
</section>
@endsection