@extends('home.master')

@section('title', 'Booth Registration')
@section('banner-name', 'BOOTH REGISTRATION')

@section('content')
@include('home.banner')

<section id="main-container" class="pb-4 main-container text-center project-area ">
    <div class="container">
        <div class="row justify-content-center mb-2" data-animation-in="slideInLeft" data-duration-in="1.2">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <livewire:booth-controller :booth="$booth" />
    </div>
</section><!-- Main container end -->
@endsection
